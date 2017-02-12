<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleStatus extends Model
{
    /**
     * Get the Vehicles with the Vehicle Status.
     */
    public function vehicles()
    {
        return $this->hasMany('App\Vehicle', 'vehicle_status_id', 'id');
    }
}
