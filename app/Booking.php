<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /**
     * Get the prices associated with the booking
     */
    public function prices()
    {
        return $this->hasMany('App\BookingPrice','booking_id', 'id');
    }
    
    /**
     * Get the drivers associated with the booking
     */
    public function drivers()
    {
        return $this->belongsToMany('App\Driver','booking_driver', 'booking_id', 'driver_id');
    }
    
    /**
     * Get the city associated with the booking user
     */
    public function city()
    {
        return $this->belongsTo('App\City','city_id', 'id');
    }
    
    /**
     * Get the state associated with the booking user
     */
    public function state()
    {
        return $this->belongsTo('App\State','state_id', 'id');
    }
    
    /**
     * Get the country associated with the booking user
     */
    public function country()
    {
        return $this->belongsTo('App\Country','country_id', 'id');
    }
    
    /**
     * Get the customer group associated with the booking user
     */
    public function customerGroup()
    {
        return $this->belongsTo('App\CustomerGroup','cutomer_group_id', 'id');
    }
    
    /**
     * Get all of the post's comments.
     */
    public function photoProofs()
    {
        return $this->morphMany('App\Photo', 'taggable');
    }
    
    /**
     * Get the booking locations associated with the booking
     */
    public function locations()
    {
        return $this->hasMany('App\BookingLocation','booking_id', 'id');
    }
}
