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
     * Get the venues for the style.
     */
    public function venues()
    {
        return $this->hasMany('App\Venue');
    }
}
