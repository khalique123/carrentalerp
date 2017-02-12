<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleStatus extends Model
{
    /**
     * Get user and role combinations for the role status
     */
    public function userRoles()
    {
        return $this->hasMany('App\UserRole', 'status_id', 'id');
    }
}
