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
    
    /**
     * Get the bookings associated with a country
     */
    public function bookings()
    {
        return $this->hasMany('App\Booking','country_id');
    }
    
    /**
     * Get the booking locations associated with a country
     */
    public function bookingLocations()
    {
        return $this->hasMany('App\BookingLocation','country_id');
    }
}
