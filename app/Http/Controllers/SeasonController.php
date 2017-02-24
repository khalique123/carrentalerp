<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Season;
use Validator;
use Illuminate\Support\Facades\Input;

class SeasonController extends Controller {

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
    public function processInputBasedRequest(Request $request) {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'season_id' => 'required|numeric',
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
            return SeasonController::destroy($request->id);
            return back();
        } else if ($request->has('deactivate')) {
            $season= Season::find($request->id);
            if(0 === strcasecmp($request->deactivate, 'false')) {
                $season->is_active = FALSE;
            }
            else {
                $season->is_active = TRUE;
            }
            $season->save();
            return back();
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $seasons = Season::all();
        return view('/seasons/listing', ['seasons' => $seasons]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('/seasons/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'season_name' => 'required',
            'season_desc' => 'required',
            'disp_order'  => 'required',
            'start_date'  => 'date|before_or_equal:end_date',
            'end_date'    => 'date|after_or_equal:start_date',
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return back()->withErrors($validator)
                         ->withInput();
        } else {
            DB::transaction(function () use ($request) {
                // store
                $season = new Season;
                $season->name           = Input::get('season_name');
                $season->description    = Input::get('season_desc');
                $season->display_order  = Input::get('disp_order');
                $season->start_date     = Input::get('start_date');
                $season->end_date       = Input::get('end_date');
                $season->is_active      = FALSE;

                $season->save();
            });
            return redirect()->route('season_list_route');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $season = Season::where('id', '=', $id)->first();
        return view('/seasons/show', ['season' => $season]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $season = Season::find($id);
        return view('/seasons/edit', ['season' => $season]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'season_name' => 'required',
            'season_desc' => 'required',
            'disp_order'  => 'required',
            'start_date'  => 'date|before_or_equal:end_date',
            'end_date'    => 'date|after_or_equal:start_date',
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return back()->withErrors($validator)
                            ->withInput();
        } else {
            DB::transaction(function () use ($request, $id) {
                // store
                $season = Season::find($id);
                $season->name           = Input::get('season_name');
                $season->description    = Input::get('season_desc');
                $season->display_order  = Input::get('disp_order');
                $season->start_date     = Input::get('start_date');
                $season->end_date       = Input::get('end_date');

                $season->save();
            });
            return redirect()->route('season_list_route');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        DB::transaction(function () use ($id) {
            $season = Season::where('id', $id)->first();

            $season->delete();
        });
        return redirect()->route('season_list_route');
    }
}
