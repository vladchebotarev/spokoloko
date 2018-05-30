<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Service
 * @package App
 */
class Service extends Model
{
    /**
     * Get the user for the service.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the city for the service.
     */
    public function city()
    {
        return $this->belongsTo('App\City');
    }

    /**
     * Get the images for the service.
     */
    public function images()
    {
        return $this->hasMany('App\ServiceImage');
    }

    /**
     * Get the event types for the service.
     */
    public function eventTypes()
    {
        return $this->belongsToMany('App\EventType', 'venue_eventtypes', 'venue_id', 'event_type_id');
    }

    /**
     * Get the service types for the service.
     */
    public function serviceType()
    {
        return $this->belongsTo('App\ServiceType');
    }

    /**
     * Get the service subtypes for the service.
     */
    public function serviceSubtype()
    {
        return $this->belongsTo('App\ServiceSubtype');
    }
}
