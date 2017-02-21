<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$userId = Cookie::get('user_id');
        $user = Auth::user();
        $roles = $user->roles();
        
        foreach ($roles as $role) {
            if(0 === strcasecmp($role, 'admin')) {
                return view('admin/dashboard');
            }
        }
        
        //return view('home');
        return view('admin/dashboard');
    }
}
