<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerGroup extends Model
{
    /**
     * Get the booking customer associated with the customer group
     */
    public function customers()
    {
        return $this->hasMany('App\Customer','cutomer_group_id', 'id');
    }
}
