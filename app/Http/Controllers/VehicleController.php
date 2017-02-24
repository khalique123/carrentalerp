<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Vehicle;
use App\Branch;
use App\VehicleClass;
use App\Availability;
use App\Fuel;
use App\Transmission;
use Validator;
use Illuminate\Support\Facades\Input;

class VehicleController extends Controller {

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
            'id' => 'exists:vehicles,id',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process
        if ($validator->fails()) {
            return back();
        }

        if ($request->has('delete')) {
            VehicleController::destroy($request->id);
            return back();
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $vehicles = Vehicle::all();
        $vehicleClasses = VehicleClass::all();
        $availabilities = Availability::all();
        return view('/vehicle/listing', ['vehicles' => $vehicles, 'vehicle_classes' => $vehicleClasses,
            'availabilities' => $availabilities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $existingVehicles = Vehicle::select('id', 'vehicle_code')->get();
        $branches = Branch::select('id', 'name')->get();
        $vehicleClasses = VehicleClass::select('id', 'name')->get();
        $transmissions = Transmission::select('id', 'name')->get();
        $fuels = Fuel::select('id', 'name')->get();
        $availabilities = Availability::select('id', 'name')->get();

        return view('/vehicle/create_step1', ['existing_vehicles' => $existingVehicles, 'branches' => $branches,
            'vehicle_classes' => $vehicleClasses, 'transmissions' => $transmissions, 'fuels' => $fuels, 'availabilities' => $availabilities]);
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
            'gallery_img' => 'image',
            'veh_loc' => 'exists:branches,id',
            'reg' => 'required',
            'make' => 'required',
            'model' => 'required',
            'year' => 'digits:4',
            'people' => 'between:0,500',
            'baggage' => 'between:0,200',
            'doors' => 'between:0,20',
            'ac' => [Rule::in(['on', 'off'])],
            'class' => 'exists:vehicle_classes,id',
            'transmission' => 'exists:transmissions,id',
            'weight' => 'numeric',
            'fuel_type' => 'exists:fuels,id',
            'availability' => 'exists:availabilities,id',
            'disp_order' => 'integer',
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return back()->withErrors($validator)
                         ->withInput();
        } else {
            DB::transaction(function () use ($request) {
                // store
                $vehicle = new Vehicle;
                //$vehicle->gallery_img = Input::get('gallery_img');
                $vehicle->branch_id = Input::get('veh_loc');
                $vehicle->vehicle_code = Input::get('code');
                $vehicle->reg_number = Input::get('reg');
                $vehicle->chassis_number = Input::get('chassis');
                $vehicle->engine_number = Input::get('engine');
                //$vehicle->vin = Input::get('vin');
                $vehicle->make = Input::get('make');
                $vehicle->model = Input::get('model');
                $vehicle->manu_year = Input::get('year');
                $vehicle->color = Input::get('color');
                $vehicle->passenger_capacity = Input::get('people');
                $vehicle->baggage_capacity = Input::get('baggage');
                $vehicle->number_of_doors = Input::get('doors');
                $vehicle->is_air_conditioned = strcasecmp(Input::get('ac'), 'on') == 0? true : false;
                $vehicle->vehicle_class_id = Input::get('class');
                $vehicle->transmission_id = Input::get('transmission');
                $vehicle->weight = Input::get('weight');
                $vehicle->description = Input::get('desc');
                $vehicle->fuel_id = Input::get('fuel_type');
                $vehicle->availability_id = Input::get('availability');
                $vehicle->display_order = Input::get('disp_order');
                //$vehicle->end_date = Input::get('ratetype');

                $vehicle->save();
            });
            return redirect()->route('vehicle_list_route');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $vehicle = Vehicle::where('id', '=', $id)->first();
        return view('/vehicle/show', ['vehicle' => $vehicle]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $vehicle = Vehicle::find($id);
        return view('/vehicle/edit', ['vehicle' => $vehicle]);
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
            'disp_order' => 'required',
            'start_date' => 'date|before_or_equal:end_date',
            'end_date' => 'date|after_or_equal:start_date',
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return back()->withErrors($validator)
                            ->withInput();
        } else {
            DB::transaction(function () use ($request, $id) {
                // store
                $vehicle = Vehicle::find($id);
                $vehicle->name = Input::get('season_name');
                $vehicle->description = Input::get('season_desc');
                $vehicle->display_order = Input::get('disp_order');
                $vehicle->start_date = Input::get('start_date');
                $vehicle->end_date = Input::get('end_date');

                $vehicle->save();
            });
            return redirect()->route('vehicle_list_route');
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
            $vehicle = Vehicle::where('id', $id)->first();
            $vehicle->delete();
        });
        return redirect()->route('vehicle_list_route');
    }

}
