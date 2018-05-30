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
        return $this->hasMany('App\Venue');
    }
}
