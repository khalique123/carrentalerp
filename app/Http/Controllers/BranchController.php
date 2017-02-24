<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Branch;
use App\Country;
use App\State;
use App\City;
use Illuminate\Database\QueryException;

class BranchController extends Controller {

    /**
     * only when logged in
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Route to decide what should be the action of the form submitting to it
     *
     * @return \Illuminate\Http\Response
     */
    public function processInputBasedRequest(Request $request)
    {   
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'id'       => 'required|numeric',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process
        if ($validator->fails()) {
            return back();
        }
        
        //this is meant to handle only one request at a time not both
        if ($request->has('delete') && $request->has('deactivate')) {
            return back();
        } else if ($request->has('delete')) {
            BranchController::destroy($request->id);
        } else if ($request->has('deactivate')) {
            $branch = Branch::find($request->id);
            if (0 === strcasecmp('true', $request->get('deactivate'))) {
                $branch->is_active = TRUE;
            } else if (0 === strcasecmp('false', $request->get('deactivate'))) {
                $branch->is_active = FALSE;
            }
            $branch->save();
        }
        
        return back();
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $branches = Branch::paginate(15);
        return view('/branch/listing', ['branches' => $branches]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $countries = Country::all();
        $states = State::limit(30)->offset(30)->get();
        $cities = City::limit(30)->offset(30)->get();
        return view('/branch/create', ['countries' => $countries, 'states' => $states, 'cities' => $cities]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store() {
        $rules = array(
            'disp_order' => 'required|numeric',
            'loc_name' => 'required',
            'city' => 'required|numeric',
            'email' => 'email',
            'gmaplat' => 'numeric',
            'gmaplng' => 'numeric',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('branch/create')
                            ->withErrors($validator);
        } else {
            // store
            $branch = new Branch;
            $branch->display_order = Input::get('disp_order');
            $branch->name = Input::get('loc_name');
            $branch->address = Input::get('address');
            $branch->city_id = Input::get('city');
            $branch->phone_number = Input::get('phone');
            $branch->email = Input::get('email');
            $branch->business_hours = Input::get('busihour');
            $branch->is_active = 1;
            $branch->landmark = Input::get('landmark');
            $branch->latitude = Input::get('gmaplat');
            $branch->longitude = Input::get('gmaplng');
            $branch->save();

            // redirect
            $branches = Branch::paginate(15);
            return redirect()->route('branch_list_route');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $branch = Branch::where('id', '=', $id)->first();
        return view('/branch/show', ['branch' => $branch,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $branch = Branch::where('id', '=', $id)->first();
        $countries = Country::all();
        $states = State::limit(30)->offset(30)->get();
        $cities = City::limit(30)->offset(30)->get();
        return view('/branch/edit', ['countries' => $countries, 'states' => $states, 'cities' => $cities, 'branch' => $branch]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id) {
        $rules = array(
            'disp_order' => 'required|numeric',
            'loc_name' => 'required',
            'city' => 'required|numeric',
            'email' => 'email',
            'gmaplat' => 'numeric',
            'gmaplng' => 'numeric',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return back()->withErrors($validator);
        } else {
            // store
            $branch = Branch::where('id', '=', Input::get('id'))->first();
            $branch->display_order = Input::get('disp_order');
            $branch->name = Input::get('loc_name');
            $branch->address = Input::get('address');
            $branch->city_id = Input::get('city');
            $branch->phone_number = Input::get('phone');
            $branch->email = Input::get('email');
            $branch->business_hours = Input::get('busihour');
            $branch->is_active = 1;
            $branch->landmark = Input::get('landmark');
            $branch->latitude = Input::get('gmaplat');
            $branch->longitude = Input::get('gmaplng');
            $branch->save();

            // redirect
            $branches = Branch::paginate(15);
            return redirect()->route('branch_list_route');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        try {
            $affectedRows = Branch::where('id', '=', $id)->delete();
        } catch (QueryException $e) {
            if (Branch::where('id', '=', $id)->first()->vehicles()->count() > 0) {
                return back()->with('flash_message', 'Unable to delete branch as 1 or more vehicle is in the branch.'
                        .'Kindly delete or transfer vehicles of this branch before proceeding');
            }
        }
        if ($affectedRows > 0) {
            return redirect()->route('branch_list_route');
        }
    }

}
