<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * Get the users associated with a city
     */
    public function users()
    {
        return $this->hasMany('App\User','city_id');
    }
    
    /**
     * Get the branches associated with a city
     */
    public function branches()
    {
        return $this->hasMany('App\Branch','city_id');
    }
}
