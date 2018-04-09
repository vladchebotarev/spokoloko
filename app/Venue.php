<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{

    /**
     * Get the city for the venue.
     */
    public function city()
    {
        return $this->belongsTo('App\City');
    }

    /**
     * Get the images for the blog post.
     */
    public function images()
    {
        return $this->hasMany('App\VenueImage');
    }

    /**
     * Get the event types for the venue.
     */
    public function eventTypes()
    {
        return $this->belongsToMany('App\EventType', 'venue_eventtypes', 'venue_id', 'event_type_id');
    }


    /**
     * Get the venue types for the venue.
     */
    public function venueTypes()
    {
        return $this->belongsToMany('App\VenueType', 'venue_venuetypes', 'venue_id', 'venue_type_id');
    }

    /**
     * Get the venue amenities for the venue.
     */
    public function amenities()
    {
        return $this->belongsToMany('App\VenueAmenity', 'venue_venueamenities', 'venue_id', 'venue_amenity_id');
    }

    /**
     * Get the venue rules for the venue.
     */
    public function rules()
    {
        return $this->belongsToMany('App\VenueRule', 'venue_venuerules', 'venue_id', 'venue_rule_id');
    }

    /**
     * Get the venue styles for the venue.
     */
    public function styles()
    {
        return $this->belongsToMany('App\VenueStyle', 'venue_venuestyle', 'venue_id', 'venue_style_id');
    }

    /**
     * Get the venue features for the venue.
     */
    public function features()
    {
        return $this->belongsToMany('App\VenueFeature', 'venue_venuefeatures', 'venue_id', 'venue_feature_id');
    }



}
