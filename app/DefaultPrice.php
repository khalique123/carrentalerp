<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DefaultPrice extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['pricing_type_id', 'rate', 'pricing_season_id'];
    protected $hidden = ['priceable_id', 'priceable_type'];
    /**
     * Get all of the owning priceable models.
     */
    public function priceable()
    {
        return $this->morphTo();
    }
    
    /**
     * Get  the pricing type associated with the price.
     */
    public function pricingType()
    {
        return $this->belongsTo('App\PricingType', 'pricing_type_id', 'id');
    }
    
    /**
     * Get  the  season associated with the price.
     */
    public function season()
    {
        return $this->belongsTo('App\Season', 'pricing_season_id', 'id');
    }
}
