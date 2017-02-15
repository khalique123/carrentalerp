<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingLocation extends Model
{
    /**
     * Get the bookings associated with the booking location
     */
    public function bookings()
    {
        return $this->belongsTo('App\Booking','booking_id', 'id');
    }
    
    /**
     * Get the city of the booking location
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
        return $this->city()->state();
    }
    
    /**
     * Get the country in which branch is located
     */
    public function country()
    {
        return $this->city()->state()->country();
    }
}
