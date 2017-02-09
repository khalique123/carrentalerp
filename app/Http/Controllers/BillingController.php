<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('billing_entry');
        //return redirect()->route('vehicle_list_route', ['vehicle_info' => $vehicleInfo]);
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
        //
    }
}
