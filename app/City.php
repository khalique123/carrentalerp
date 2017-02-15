<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $timestamps = false;
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
    
    /**
     * Get the bookings associated with a city
     */
    public function bookings()
    {
        return $this->hasMany('App\Booking','city_id');
    }
    
    /**
     * Get the booking locations associated with a city
     */
    public function bookingLocations()
    {
        return $this->hasMany('App\BookingLocation','city_id');
    }
}
