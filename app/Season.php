<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    public $timestamps = false;
    /**
     * Get  the  default prices associated with the season.
     */
    public function defaultPrices()
    {
        return $this->hasMany('App\DefaultPrice', 'pricing_season_id', 'id');
    }
}
