<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public $timestamps = false;
    /**
     * Get the prices associated with the currency
     */
    public function prices()
    {
        return $this->hasMany('App\BookingPrice','currency_id');
    }
    
    /**
     * Get the rental accessories associated with the currency
     */
    public function rentalAccessory()
    {
        return $this->hasMany('App\RentalAccessory','currency_id');
    }
}
