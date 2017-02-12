<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    /**
     * Get all of the owning commentable models.
     */
    public function taggable()
    {
        return $this->morphTo();
    }
}
