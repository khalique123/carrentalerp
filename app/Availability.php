<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    /**
     * Get the Vehicle associated with the Vehicle Class.
     */
    public function vehicles()
    {
        return $this->hasMany('App\Vehicle', 'availability_id', 'id');
    }
}