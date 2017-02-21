<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DefaultPrice extends Model
{
    /**
     * Get all of the owning priceable models.
     */
    public function priceable()
    {
        return $this->morphTo();
    }
}
