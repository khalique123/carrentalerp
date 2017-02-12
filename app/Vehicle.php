<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    
    /**
     * Get the vehicle class associated with the vehicle.
     */
    public function vehicleClass()
    {
        return $this->belongsTo('App\VehicleClass','vehicle_class_id');
    }
    
    /**
     * Get the vehicle transmission associated with the vehicle.
     */
    public function transmission()
    {
        return $this->belongsTo('App\Transmission', 'transmission_id');
    }
    
    /**
     * Get the fuel associated with the vehicle.
     */
    public function fuel()
    {
        return $this->belongsTo('App\Fuel', 'fuel_id');
    }
    
    /**
     * Get the vehicle availability associated with the vehicle.
     */
    public function availability()
    {
        return $this->belongsTo('App\Availability', 'availability_id');
    }
    
    /**
     * Get the branch associated with the vehicle.
     */
    public function branch()
    {
        return $this->belongsTo('App\Branch', 'branch_id');
    }
    
    /**
     * Get the vehicle status associated with the vehicle.
     */
    public function status()
    {
        return $this->belongsTo('App\VehicleStatus', 'vehicle_status_id');
    }
    
    /**
     * Get all of the post's comments.
     */
    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
    
    /**
     * Get all of the vehicles photos.
     */
    public function photos()
    {
        return $this->morphMany('App\Photo', 'taggable');
    }
}
