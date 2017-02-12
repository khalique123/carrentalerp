<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    /**
     * Get the users associated with a state
     */
    public function users()
    {
        return $this->hasMany('App\User','state_id');
    }
    
    /**
     * Get the branches associated with a state
     */
    public function branches()
    {
        return $this->hasMany('App\Branch','state_id');
    }
    
    /**
     * Get the bookings associated with a state
     */
    public function bookings()
    {
        return $this->hasMany('App\Booking','state_id');
    }
    
    /**
     * Get the booking locations associated with a state
     */
    public function bookingLocations()
    {
        return $this->hasMany('App\BookingLocation','state_id');
    }
}
