<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    /**
     * Get the Vehicles with the Vehicle Status.
     */
    public function vehicles()
    {
        return $this->hasMany('App\Vehicle', 'branch_id', 'id');
    }
    
    /**
     * Get the city in which branch is located
     */
    public function city()
    {
        return $this->belongsTo('App\City', 'city_id', 'id');
    }
    
    /**
     * Get the state in which branch is located
     */
    public function state()
    {
        return $this->belongsTo('App\State', 'state_id', 'id');
    }
    
    /**
     * Get the country in which branch is located
     */
    public function country()
    {
        return $this->belongsTo('App\Country', 'country_id', 'id');
    }
}
