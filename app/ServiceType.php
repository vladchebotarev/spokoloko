<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'servicetypes';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the services for the type.
     */
    public function services()
    {
        return $this->hasMany('App\Venue');
    }

    /**
     * Get the subtypes for the type.
     */
    public function subtypes()
    {
        return $this->hasMany('App\ServiceSubtype');
    }
}
