<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VenueType extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'venuetypes';

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
        return $this->belongsToMany('App\Venue', 'venue_venuetypes', 'venue_type_id', 'venue_id');
    }
}
