<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $timestamps = false;
    /**
     * Get the states associated with a country
     */
    public function states() {
        return $this->hasMany('App\State','country_id');
    }
}
