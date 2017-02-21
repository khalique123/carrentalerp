<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public $timestamps = false;
    
    /**
     * Get the cities associated with a state
     */
    public function cities()
    {
        return $this->hasMany('App\City','state_id');
    }
    
    /**
     * Get the country associated with a state
     */
    public function country()
    {
        return $this->belongsTo('App\Country','country_id');
    }
}
