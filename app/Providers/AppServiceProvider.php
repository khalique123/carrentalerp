<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\VehicleClass;

class AppServiceProvider extends ServiceProvider
{    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('hash_match',
            function ($attribute, $value, $parameters, $validator)
            {
                $result = Hash::check($value, $parameters[0]);
                return $result;
            }
        );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
