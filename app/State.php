<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    /**
     * Get the users associated with a state
     */
    public function users()
    {
        return $this->hasMany('App\User','state_id');
    }
    
    /**
     * Get the branches associated with a state
     */
    public function branches()
    {
        return $this->hasMany('App\Branch','state_id');
    }
}
