<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VenueStyle extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'venuestyles';

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
        return $this->belongsToMany('App\Venue', 'venue_venuestyles', 'venue_style_id', 'venue_id');
    }
}
