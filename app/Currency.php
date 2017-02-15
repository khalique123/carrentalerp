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
}
