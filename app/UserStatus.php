<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserStatus extends Model
{
    /**
     * Get the users corresponding to a status
     */
    public function users()
    {
        return $this->hasMany('App\User', 'status', 'id');
    }
}
