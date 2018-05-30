<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VenueImage extends Model
{
    /**
     * Get the venue that owns the comment.
     */
    public function venue()
    {
        return $this->belongsTo('App\Venue');
    }
}
