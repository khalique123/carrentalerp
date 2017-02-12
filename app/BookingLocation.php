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
     * Get the state of the booking location
     */
    public function state()
    {
        return $this->belongsTo('App\State', 'state_id', 'id');
    }
    
    /**
     * Get the country of the booking location
     */
    public function country()
    {
        return $this->belongsTo('App\Country', 'country_id', 'id');
    }
}
