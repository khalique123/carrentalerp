<?php

namespace App\Http\Controllers\Auth;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;

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
        
        $currentUserPassword = Auth::User()->password;
        $rulesInputCheck = array(
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password|min:8',
            'old_password' => 'required|min:8|hash_match:'.$currentUserPassword,
        );
        $validatorInputCheck  = Validator::make(Input::all(), $rulesInputCheck);

        $oldPassword = Input::get('old_password');
        $newPassword = Input::get('password');
        $confirmPassword = Input::get('confirm_password');
        $req = $request->all();
        
        // process the login
        if ($validatorInputCheck->fails()) {
            $var =back()
                ->withErrors($validatorInputCheck)
                ->with('flash_message', 'Please correct all the errors before proceeding')
                ->with('flash_type', 'alert-info');
            return $var;
        }
        else {
            $user = Auth::User();
            $user->password = Hash::make($newPassword);
            $user->save();
           return redirect()->route('change_password')->with('flash_message', 'Password Changed Successfully')
                ->with('flash_type', 'alert-info');
        }
    }
}
