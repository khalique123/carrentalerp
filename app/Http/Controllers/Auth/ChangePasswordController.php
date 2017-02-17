<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChangePasswordController extends Controller
{
    /**
     * Change password when logged in.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        return view('auth/passwords/change_password');
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rulesInputCheck = array(
            'password' => 'required|confirm|min:8|password_match',
            'password_confirmation' => 'required|same:password|min:8',
            'old_password' => 'required|min:8'            
        );
        $validatorInputCheck  = Validator::make(Input::all(), $rules);

        $oldPassword = Input::get('old_password');
        $newPassword = Input::get('password');
        $confirmPassword = Input::get('confirm_password');
        
        $currentUserPassword = Auth::User()->password;
        // process the login
        if ($validatorInputCheck->fails()) {
            return back()
                ->withErrors($validator);
        }
        else {
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
}
