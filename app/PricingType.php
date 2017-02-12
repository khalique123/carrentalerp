<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PricingType extends Model
{
    /**
     * Get the prices associated with the booking 
     */
    public function prices()
    {
        return $this->hasMany('App\BookingPrice','pricing_type_id', 'id');
    }
}
