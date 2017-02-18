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

class BranchController extends Controller
{
    /**
     * only when logged in
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $branches = Branch::paginate(15);
        return view('/branch/listing', ['branches' => $branches]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
    public function store(Request $request)
    {
        $rules = array(
            'disp_order'    => 'required|numeric',
            'loc_name'      => 'required',
            'city'          => 'required|numeric',
            'email'         => 'email',
            'gmaplat'       => 'numeric',
            'gmaplng'       => 'numeric',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('branch/create')
                ->withErrors($validator);
        } else {
            // store
            $branch = new Branch;
            $branch->display_order            = Input::get('disp_order');
            $branch->name                     = Input::get('loc_name');
            $branch->address                  = Input::get('address');
            $branch->city_id                  = Input::get('city');
            $branch->phone_number             = Input::get('phone');
            $branch->email                    = Input::get('email');
            $branch->business_hours           = Input::get('busihour');
            $branch->is_active                = 1;
            $branch->landmark                 = Input::get('landmark');
            $branch->latitude                 = Input::get('gmaplat');
            $branch->longitude                = Input::get('gmaplng');
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
    public function show($id)
    {
        $countries = Country::all();
        $states = State::limit(30)->offset(30)->get();
        $cities = City::limit(30)->offset(30)->get();
        $branch = Branch::where('id', '=', $id);
        
        return view('/branch/show', ['branch' => $branch, 'countries' => $countries, 'states' => $states, 'cities' => $cities]);
    }
    
    /**
     * Display the specified vechicles available between the specified times.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search($from, $to, $class = "All", $location = "All", $branch = "All")
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'from'       => 'required',
            'to'         => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return back()
                ->withErrors($validator);
        } else {
            $vehicleInfo = App\Vehicle::where('id', '=', $id);
                
            return redirect()->route('vehicle_show_route', ['vehicle_info' => $vehicleInfo, 'message' => '']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'id'       => 'required|digits_between:0,1000000'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return back()
                ->withErrors($validator);
        } else {
            $vehicleInfo = $vehicleInfo = App\Vehicle::where('id', '=', $id)->first();
                                
            return view('edit_vehicle', ['vehicle_info' => $vehicleInfo]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'id'       => 'required|digits_between:0,1000000'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return back()
                ->withErrors($validator);
        } else {
            // store
            $vehicle = App\Vehicle::where('id', $id)->first();

            $vehicle->reg_number               = Input::get('reg_number');
            $vehicle->chassis_number           = Input::get('chassis_number');
            $vehicle->engine_number            = Input::get('engine_number');
            $vehicle->make                     = Input::get('make');
            $vehicle->model                    = Input::get('model');
            $vehicle->manu_year                = Input::get('manu_year');
            $vehicle->color                    = Input::get('color');
            $vehicle->vehicle_class_id         = Input::get('vehicle_class_id');
            $vehicle->weight                   = Input::get('weight');
            $vehicle->transmission_id          = Input::get('transmission_id');
            $vehicle->description              = Input::get('description');
            $vehicle->fuel_id                  = Input::get('fuel_id');
            $vehicle->availability_id          = Input::get('availability_id');
            $vehicle->vehicle_location         = Input::get('vehicle_location');
            $vehicle->branch_id                = Input::get('branch_id');
            $vehicle->vehicle_status_id        = Input::get('vehicle_status_id');
            $vehicle->save();
                        
            $vehicleInfo = App\Vehicle::where('id', $id)->first();
                                
            return view('show_vehicle', ['vehicle_info' => $vehicleInfo, 'message' => 'Vehicle Info updated successfully.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $affectedRows  = Branch::where('id', '=', $id)->delete();
        //return response()->json(array('affectedRows' => $affectedRows), 200);
        return redirect()->route('branch_list_route');
    }
    
    public function test() {
        $vehicleInfo = Country::all();
            
        return view('test', ['vehicle_info' => $vehicleInfo]);
    }
}
