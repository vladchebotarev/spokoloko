<?php

namespace App\Http\Controllers;

use App\City;
use App\EventType;
use App\VenueAmenity;
use App\VenueFeature;
use App\VenueRule;
use App\VenueType;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function index(){

        $cities = City::all();
        $eventTypes = EventType::all();
        $venueTypes = VenueType::all();
        $amenities = VenueAmenity::all();
        $features = VenueFeature::all();
        $rules = VenueRule::all();

        $data = array(
            'cities' => $cities,
            'eventTypes' => $eventTypes,
            'venueTypes' => $venueTypes,
            'amenities' => $amenities,
            'features' => $features,
            'rules' => $rules,

        );


        return view('search', $data);

        //dump($data);

    }
}
