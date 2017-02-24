<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleClass extends Model
{
    
    public $timestamps = false;
    /**
     * Get the Vehicle associated with the Vehicle Class.
     */
    public function vehicles()
    {
        return $this->hasMany('App\Vehicle', 'vehicle_class_id', 'id');
    }
    
    /**
     * Get all of the vehicle class prices.
     */
    public function prices()
    {
        return $this->morphMany('App\DefaultPrice', 'priceable');
    }
}
