<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VenueFeature extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'venuefeatures';

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
        return $this->belongsToMany('App\Venue', 'venue_venuefeatures', 'venue_feature_id', 'venue_id');
    }
}
