<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * Get the users associated with a country
     */
    public function users()
    {
        return $this->hasMany('App\User','country_id');
    }
    
    /**
     * Get the branches associated with a country
     */
    public function branches()
    {
        return $this->hasMany('App\Branch','country_id');
    }
}
