<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    public $timestamps = false;
    /**
     * Get  the  default prices associated with the season.
     */
    public function prices()
   
        return $this->morphMany('App\DefaultPrice', 'priceable');
    }
}
