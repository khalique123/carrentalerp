<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicleInfo = DB::table('vehicles AS v')
            ->join('vendor_vehicle AS vv', 'v.id', '=', 'vv.vehicle_id')
            ->join('vendors AS ve', 've.id', '=', 'vv.owner_id')
            ->join('models AS m', 'm.id', '=', 'v.model_id')
            ->join('fuels AS f', 'f.id', '=', 'v.fuel_id')
            ->join('address AS a1', 'a1.id', '=', 've.primary_address')
            ->join('address AS a2', 'a2.id', '=', 've.secondary_address')
            ->select('v.id, v.registration_number', 'v.registered_owner', 'v.color','ve.first_name', 've.last_name', 've.email'
                    , 've.is_active','a1.phone_number AS primary_phone', 'a2.phone_number AS secondary_phone', 'm.name AS model_name'
                    , 'm.manufacturer', 'm.brand', 'f.name AS fuel_type')
            ->get()
            ->paginate(15);
            
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
            $vehicle->model_id                 = Input::get('model_id');
            $vehicle->registartion_number      = Input::get('reg_num');
            $vehicle->registered_owner         = Input::get('reg_owner');
            $vehicle->address                  = Input::get('address');
            $vehicle->makers_class             = Input::get('makers_class');
            $vehicle->manufacture_date         = Input::get('manufacture_date');
            $vehicle->fuel_id                  = Input::get('fuel_id');
            $vehicle->engine_number            = Input::get('engine_number');
            $vehicle->chassis_number           = Input::get('chassis_number');
            $vehicle->seating_capacity         = Input::get('seating_capacity');
            $vehicle->color                    = Input::get('color');
            $vehicle->registration_date        = Input::get('registration_date');
            $vehicle->registration_expiry_date = Input::get('registration_expiry_date');
            $vehicle->kilometers_run           = Input::get('kilometers_run');
            $vehicle->fuel_efficiency          = Input::get('fuel_efficiency');
            $vehicle->interior_rating          = Input::get('interior_rating');
            $vehicle->engine_rating            = Input::get('engine_rating');
            $vehicle->tyres_rating             = Input::get('tyres_rating');
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
            $vehicleInfo = DB::table('vehicles AS v')
                ->join('vendor_vehicle AS vv', 'v.id', '=', 'vv.vehicle_id')
                ->join('vendors AS ve', 've.id', '=', 'vv.owner_id')
                ->join('models AS m', 'm.id', '=', 'v.model_id')
                ->join('fuels AS f', 'f.id', '=', 'v.fuel_id')
                ->join('address AS a1', 'a1.id', '=', 've.primary_address')
                ->join('address AS a2', 'a2.id', '=', 've.secondary_address')
                ->select('v.id, v.registration_number', 'v.registered_owner', 'v.color','ve.first_name', 've.last_name', 've.email'
                        , 've.is_active', 'a1.phone_number AS primary_phone', 'a2.phone_number AS secondary_phone', 'm.name AS model_name'
                        , 'm.manufacturer', 'm.brand', 'f.name AS fuel_type')
                ->where('v.id = $id')
                ->first();
                
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
            $vehicleInfo = DB::table('vehicles AS v')
                ->join('vendor_vehicle AS vv', 'v.id', '=', 'vv.vehicle_id')
                ->join('vendors AS ve', 've.id', '=', 'vv.owner_id')
                ->join('models AS m', 'm.id', '=', 'v.model_id')
                ->join('fuels AS f', 'f.id', '=', 'v.fuel_id')
                ->join('address AS a1', 'a1.id', '=', 've.primary_address')
                ->join('address AS a2', 'a2.id', '=', 've.secondary_address')
                ->select('v.registration_number', 'v.registered_owner', 'v.color','ve.first_name', 've.last_name', 've.email', 've.is_active'
                        ,'a1.phone_number AS primary_phone', 'a2.phone_number AS secondary_phone', 'm.name AS model_name', 'm.manufacturer'
                        ,'m.brand', 'f.name AS fuel_type')
                ->where('v.id = $id')
                ->first();
                                
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
            $vehicle = App\Vehicle::where('vehicle_id', $id);
            $vehicle->model_id                 = Input::get('model_id');
            $vehicle->registartion_number      = Input::get('reg_num');
            $vehicle->registered_owner         = Input::get('reg_owner');
            $vehicle->address                  = Input::get('address');
            $vehicle->makers_class             = Input::get('makers_class');
            $vehicle->manufacture_date         = Input::get('manufacture_date');
            $vehicle->fuel_id                  = Input::get('fuel_id');
            $vehicle->engine_number            = Input::get('engine_number');
            $vehicle->chassis_number           = Input::get('chassis_number');
            $vehicle->seating_capacity         = Input::get('seating_capacity');
            $vehicle->color                    = Input::get('color');
            $vehicle->registration_date        = Input::get('registration_date');
            $vehicle->registration_expiry_date = Input::get('registration_expiry_date');
            $vehicle->kilometers_run           = Input::get('kilometers_run');
            $vehicle->fuel_efficiency          = Input::get('fuel_efficiency');
            $vehicle->interior_rating          = Input::get('interior_rating');
            $vehicle->engine_rating            = Input::get('engine_rating');
            $vehicle->tyres_rating             = Input::get('tyres_rating');
            $vehicle->save();
                        
            $vehicleInfo = DB::table('vehicles AS v')
                ->join('vendor_vehicle AS vv', 'v.id', '=', 'vv.vehicle_id')
                ->join('vendors AS ve', 've.id', '=', 'vv.owner_id')
                ->join('models AS m', 'm.id', '=', 'v.model_id')
                ->join('fuels AS f', 'f.id', '=', 'v.fuel_id')
                ->join('address AS a1', 'a1.id', '=', 've.primary_address')
                ->join('address AS a2', 'a2.id', '=', 've.secondary_address')
                ->select('v.registration_number', 'v.registered_owner', 'v.color','ve.first_name', 've.last_name', 've.email', 've.is_active'
                        ,'a1.phone_number AS primary_phone', 'a2.phone_number AS secondary_phone', 'm.name AS model_name', 'm.manufacturer'
                        ,'m.brand', 'f.name AS fuel_type')
                ->where('v.id = $id')
                ->first();
                                
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
            $vehicle = App\Vehicle::where('vehicle_id', $id);
            $vehicle->delete();
            
            return redirect()->route('vehicle_list_route');
        }
    }
}
