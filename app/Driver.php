<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    /**
     * Get category of the driver
     */
    public function category()
    {
        return $this->belongsTo('App\DriverCategory', 'category_id', 'id');
    }
    
    /**
     * Get the bookings associated with the driver*/
    public function bookings()
    {
        return $this->belongsToMany('App\Booking','booking_driver', 'driver_id', 'booking_id');
    }
}
