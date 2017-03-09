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
        $rules = array(
            'id' => 'exists:vehicles,id',
        );

        if ($request->has('buttonFilterVehicles')) {
            $request->car_class != 0 ? $rules['car_class'] = 'exists:vehicle_classes,id' : "";
            $request->car_av != 0 ? $rules['car_av'] = 'exists:availabilities,id' : "";
        }

        $validator = Validator::make(Input::all(), $rules);

        // process
        if ($validator->fails()) {
            return view('test', ['test' => $validator->getMessageBag()]);
        }

        if ($request->has('delete')) {
            VehicleController::destroy($request->id);
            return back();
        }
        //if there are some filter conditions applied to fetch vehicles
        elseif ($request->has('buttonFilterVehicles')) {
            $filterConditions = [];
            if ($request->car_class != 0) {
                $filterConditions['vehicle_class_id'] = $request->car_class;
            }

            if ($request->car_av != 0) {
                $filterConditions['availability_id'] = $request->car_av;
            }

            if (!empty($request->make)) {
                $filterConditions['make'] = $request->make;
            }

            if (!empty($request->model)) {
                $filterConditions['model'] = $request->model;
            }

            if (!empty($request->color)) {
                $filterConditions['color'] = $request->color;
            }

            if (!empty($request->license)) {
                $filterConditions['reg_number'] = $request->license;
            }
            return VehicleController::index($filterConditions);
        }
        //if no filter conditions, show all vehicles
        elseif ($request->has('buttonAllVehicles')) {
            return VehicleController::index();
        }
    }

    /**
     * Function to fetch vehicles
     * 
     * @return Vehilce model with desired vehicles
     */
    public function getVehicles($filterConditions = null) {
        if (isset($filterConditions)) {
            $vehicles = Vehicle::where(function($query) use ($filterConditions) {
                        foreach (array_keys($filterConditions) as $key) {
                            $query->where($key, '=', $filterConditions[$key]);
                        }
                    })->get();
        }
        else {
            $vehicles = Vehicle::all();
        }

        return $vehicles;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($filters = null) {
        $vehicles = VehicleController::getVehicles($filters);
        $vehicleClasses = VehicleClass::all();
        $availabilities = Availability::all();

        $available = $vehicles->filter(function($vehicle) {
            return 0 == strcasecmp('Available', $vehicle->availability['name']);
        });
        
        $maintenance = $vehicles->filter(function($vehicle) {
            return 0 == strcasecmp('Maintenance', $vehicle->availability['name']);
        });
        
        $accident = $vehicles->filter(function($vehicle) {
            return 0 == strcasecmp('Accident', $vehicle->availability['name']);
        });

        if(!isset($filters)) {
            return view('/vehicle/listing', ['vehicles' => $vehicles, 'vehicle_classes' => $vehicleClasses,
            'availabilities' => $availabilities, 'num_available' => count($available), 'num_maintenance' => count($maintenance),
            'num_accident' => count($accident)]);
        } else {
            return view('test', ['test' => $vehicles]);
        }
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
                $vehicle->is_air_conditioned = strcasecmp(Input::get('ac'), 'on') == 0 ? true : false;
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
        $existingVehicles = Vehicle::select('id', 'vehicle_code')->get();
        $branches = Branch::select('id', 'name')->get();
        $vehicleClasses = VehicleClass::select('id', 'name')->get();
        $transmissions = Transmission::select('id', 'name')->get();
        $fuels = Fuel::select('id', 'name')->get();
        $availabilities = Availability::select('id', 'name')->get();
        
        return view('/vehicle/edit_step1', ['vehicle' => $vehicle, 'existing_vehicles' => $existingVehicles, 'branches' => $branches
          , 'vehicle_classes' => $vehicleClasses, 'transmissions' => $transmissions, 'fuels' => $fuels
          , 'availabilities' => $availabilities]);
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
                $vehicle = Vehicle::find($id);
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
                $vehicle->is_air_conditioned = strcasecmp(Input::get('ac'), 'on') == 0 ? true : false;
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
