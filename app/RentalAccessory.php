<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentalAccessory extends Model
{
    public $timestamps = false;
    /**
     * Get the Pricing Type associated with the vehicle rental accessory.
     */
    public function pricingType()
    {
        return $this->belongsTo('App\PricingType','pricing_type_id');
    }
    
    /**
     * Get the Currency associated with the vehicle rental accessory.
     */
    public function currency()
    {
        return $this->belongsTo('App\currency','currency_id');
    }
}
