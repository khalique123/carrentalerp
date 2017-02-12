<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicleInfo = App\Vehicle::where('is_active', '=', 1)->paginate(15);
            
        $vehicleInfo->withPath('vehicle/results');
            
        return redirect()->route('vehicle_list_route', ['vehicle_info' => $vehicleInfo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('vehicle_create_route');
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
            'first_name'       => 'required',
            'email'      => 'required|email',
            'registration_number' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('vehicle/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $vehicle = new Vehicle;
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
            
            // redirect
            Session::flash('message', 'Successfully Entered Vehicle Information for Registration Number '.Input::get('reg_number').'.');
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
            $vehicleInfo = App\Vehicle::where('id', '=', $id)->first();
                
            return redirect()->route('vehicle_show_route', ['vehicle_info' => $vehicleInfo, 'message' => '']);
        }
    }
    
    /**
     * Display the specified vechicles available between the specified times.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function search($from, $to, $class, $location, $branch)
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
    }*/

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
                                
            return redirect()->route('vehicle_edit_route', ['vehicle_info' => $vehicleInfo]);
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
                                
            return redirect()->route('vehicle_show_route', ['vehicle_info' => $vehicleInfo, 'message' => 'Vehicle Info updated successfully.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
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
            $vehicle = App\Vehicle::where('id', $id);
            $vehicle->delete();
            
            return redirect()->route('vehicle_list_route');
        }
    }
}
