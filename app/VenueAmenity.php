<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VenueAmenity extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'venueamenities';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the venues for the type.
     */
    public function venues()
    {
        return $this->belongsToMany('App\Venue', 'venue_venueamenities', 'venue_amenity_id', 'venue_id');
    }
}
