<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VehicleClass;
use App\Vehicle;
use App\Season;
use App\PricingType;
use Validator;
use Illuminate\Support\Facades\Input;

class VehicleClassController extends Controller {

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
            'id' => 'required|numeric',
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
            return VehicleClassController::destroy($request->id);
        } else if ($request->has('deactivate')) {
            $vehicleClass = VehicleClass::find($request->id);
            $vehicleClass->is_active = TRUE;
            $vehicleClass->save();
            return back();
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $vehicleClasses = VehicleClass::all();
        return view('/vehicle/class/listing', ['vehicle_classes' => $vehicleClasses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $seasons = Season::all();
        $pricingTypes = PricingType::all();
        return view('/vehicle/class/create', ['seasons' => $seasons, 'pricing_types' => $pricingTypes]);
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
            'class_name' => 'required',
            'class_desc' => 'required|email',
            'disp_order' => 'required',
            'class_image' => 'url',
        );
        $seasons = Season::all();
        $pricing_types = PricingType::all();

        foreach ($seasons as $season) {
            foreach ($pricing_types as $pricingType) {
                $rules[$season . '::' . $pricingType] = 'numeric';
            }
        }

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return back()->withErrors($validator)
                            ->withInput();
        } else {
            // store
            $vehicleClass = new VehicleClass;
            $vehicleClass->name = Input::get('class_name');
            $vehicleClass->description = Input::get('class_desc');
            $vehicleClass->display_order = Input::get('disp_order');
            $vehicleClass->image_url = Input::get('class_image');

            foreach ($seasons as $season) {
                foreach ($pricing_types as $pricingType) {
                    $prices = $vehicleClass->prices;
                    $input = explode('::', Input::get($season . '::' . $pricingType . '_id'));
                    if ($request->has($season . '::' . $pricingType . '_id')) {
                        $prices->pricing_type = $pricingType;
                        $prices->pricing_season_id = $season;
                        $prices->rate = Input::get($season . '::' . $pricingType);
                    }
                }
            }

            $vehicleClass->save();
            
            return redirect()->route('vehicle_class_list_route');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'id' => 'required|digits_between:0,1000000'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return back()
                            ->withErrors($validator);
        } else {
            $vehicleInfo = Vehicle::where('id', '=', $id)->first();

            return view('show_vehicle', ['vehicle_info' => $vehicleInfo, 'message' => '']);
        }
    }

    /**
     * Display the specified vechicles available between the specified times.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search($from, $to, $class = "All", $location = "All", $branch = "All") {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'from' => 'required',
            'to' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return back()
                            ->withErrors($validator);
        } else {
            $vehicleInfo = Vehicle::where('id', '=', $id);

            return redirect()->route('vehicle_show_route', ['vehicle_info' => $vehicleInfo, 'message' => '']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'id' => 'required|digits_between:0,1000000'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return back()
                            ->withErrors($validator);
        } else {
            $vehicleClass = VehicleClass::find($id);

            return view('/vehicle/class/edit', ['vehicle_class' => $vehicleClass]);
        }
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
            'id' => 'required|digits_between:0,1000000'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return back()
                            ->withErrors($validator);
        } else {
            // store
            $vehicle = Vehicle::where('id', $id)->first();

            $vehicle->reg_number = Input::get('reg_number');
            $vehicle->chassis_number = Input::get('chassis_number');
            $vehicle->engine_number = Input::get('engine_number');
            $vehicle->make = Input::get('make');
            $vehicle->model = Input::get('model');
            $vehicle->manu_year = Input::get('manu_year');
            $vehicle->color = Input::get('color');
            $vehicle->vehicle_class_id = Input::get('vehicle_class_id');
            $vehicle->weight = Input::get('weight');
            $vehicle->transmission_id = Input::get('transmission_id');
            $vehicle->description = Input::get('description');
            $vehicle->fuel_id = Input::get('fuel_id');
            $vehicle->availability_id = Input::get('availability_id');
            $vehicle->vehicle_location = Input::get('vehicle_location');
            $vehicle->branch_id = Input::get('branch_id');
            $vehicle->vehicle_status_id = Input::get('vehicle_status_id');
            $vehicle->save();

            $vehicleInfo = Vehicle::where('id', $id)->first();

            return view('show_vehicle', ['vehicle_info' => $vehicleInfo, 'message' => 'Vehicle Info updated successfully.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'id' => 'required|digits_between:0,1000000'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return back()
                            ->withErrors($validator);
        } else {
            $vehicleClass = VehicleClass::where('id', $id);
            $vehicleClass->delete();

            return redirect()->route('vehicle_class_list_route');
        }
    }

}
