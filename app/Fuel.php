<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fuel extends Model
{
    public $timestamps = false;
    /**
     * Get the Vehicles with the fuel type.
     */
    public function vehicles()
    {
        return $this->hasMany('App\Vehicle', 'fuel_id', 'id');
    }
}
