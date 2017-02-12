<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    /**
     * Get the status of the user role relationship.
     */
    public function status()
    {
        return $this->belongsTo('App\RoleStatus','status_id', 'id');
    }
}
