<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DriverCategory extends Model
{
    /**
     * Get drivers associated with the category
     */
    public function drivers()
    {
        return $this->belongsTo('App\Driver', 'category_id', 'id');
    }
}
