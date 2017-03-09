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
use App\Country;
use App\StaticTime;
use Validator;
use Illuminate\Support\Facades\Input;

class BookingController extends Controller
{
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
            
            BookingController::getVehicles($filterConditions);
        }
        //if no filter conditions, show all vehicles
        elseif ($request->has('buttonAllVehicles')) {
            return BookingController::index();
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
        } else {
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
        $vehicles = BookingController::getVehicles($filters);
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

        $static_times = StaticTime::all();
        $countries = Country::all();
        $branches = Branch::all();
        if(!isset($filters)) {
            return view('/rental/booking/new_booking', ['vehicles' => $vehicles, 'vehicle_classes' => $vehicleClasses,
            'availabilities' => $availabilities, 'num_available' => count($available), 'num_maintenance' => count($maintenance),
            'num_accident' => count($accident), 'static_times' => $static_times, 'countries' => $countries, 'branches' => $branches]);
        } else {
            return view('test', ['test' => $vehicles]);
        }
    }

    /**
     * Route to show the booking page
     * 
     * @return \Illuminate\Http\Response
     */
    public function create($vehicle_id, $from_date, $to_date) {
        $vehicle = Vehicle::where('id', $vehicle_id)
                ->select('id', 'name', 'vehicle_code')
                ->first();
        $static_times = StaticTime::all();
        //write some logic here to filter vehicles based on from_date and to_date
        return view('/rental/booking/new_booking', $vehicle, $from_date, $to_date, $static_times);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'vehicle_id'       => 'required',
            'email'      => 'required|email',
            'customer_id' => 'required',
            'travel_date' => 'required',
            'expected_return_date' => 'required',
            'pick_up_time' => 'required',
            'pick_up_location' => 'required',
            'from_city' => 'required',
            'from_city_id' => 'required',
            'total_estimated_amount' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('vehicle/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $vehicle = new Billing;
            $vehicle->vehicle_id               = Input::get('vehicle_id');
            $vehicle->first_name               = Input::get('first_name');
            $vehicle->last_name                = Input::get('last_name');
            $vehicle->phone_number             = Input::get('phone_number');
            $vehicle->age                      = Input::get('age');
            $vehicle->email                    = Input::get('email');
            $vehicle->people_travelling        = Input::get('people_travelling');
            $vehicle->travel_date              = Input::get('travel_date');
            $vehicle->expected_return_date     = Input::get('expected_return_date');
            $vehicle->actual_return_date       = Input::get('actual_return_date');
            $vehicle->pick_up_time             = Input::get('pick_up_time');
            $vehicle->pick_up_location         = Input::get('pick_up_location');
            $vehicle->advance_payment_amount   = Input::get('advance_payment_amount');
            $vehicle->from_city_id             = Input::get('from_city_id');
            $vehicle->total_estimated_amount   = Input::get('total_estimated_amount');
            $vehicle->total_actual_amount      = Input::get('total_actual_amount');
            $vehicle->save();
            
            // redirect
            Session::flash('message', 'Successfully Entered Vehicle Information for Registration Number '.$registartion_number.'.');
            return redirect()->route('vehicle_show_route', ['vehicle_info' => $vehicleInfo, 'message' => 'Vehicle Info inserted successfully']);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = Booking::destroy($id);
        
    }
}
