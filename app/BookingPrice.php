<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingPrice extends Model
{
    /**
     * Get the currency associated with the price
     */
    public function currency()
    {
        return $this->belongsTo('App\Currency','currency_id', 'id');
    }
    
    /**
     * Get the booking associated with the price
     */
    public function booking()
    {
        return $this->belongsTo('App\Booking','booking_id', 'id');
    }
    
    /**
     * Get the booking associated with the price
     */
    public function pricing_type()
    {
        return $this->belongsTo('App\PricingType','pricing_type_id', 'id');
    }
}
