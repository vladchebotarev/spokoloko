<?php

namespace App\Http\Controllers;

use App\City;
use App\EventType;
use App\Venue;
use App\VenueAmenity;
use App\VenueFeature;
use App\VenueRule;
use App\VenueType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    //
    public function index($city_request, Request $request)
    {

        $city = City::where('name', $city_request)->first();

        if ($city === null) {
            return abort(404);
        } else {
            $current_event_type = Input::get('eventType');

            $min_price = (Input::get('minPrice') != '') ? Input::get('minPrice') : 0;
            $max_price = (Input::get('maxPrice') != '') ? Input::get('maxPrice') : 10000;

            $current_venue_types = (Input::get('venue_types') != '') ? Input::get('venue_types') : array();
            $current_amenities = (Input::get('amenities') != '') ? Input::get('amenities') : array();
            $current_features = (Input::get('features') != '') ? Input::get('features') : array();
            $current_rules = (Input::get('rules') != '') ? Input::get('rules') : array();

            $venues = DB::table('venues')->where('city_id', $city->id)->get();


            $cities = City::all();
            $eventTypes = EventType::all();
            $venueTypes = VenueType::all();
            $amenities = VenueAmenity::all();
            $features = VenueFeature::all();
            $rules = VenueRule::all();


            $data = array(
                'current_city' => $city,
                'current_event_type' => $current_event_type,
                'current_venue_types' => $current_venue_types,
                'current_amenities' => $current_amenities,
                'current_features' => $current_features,
                'current_rules' => $current_rules,
                'min_price' => $min_price,
                'max_price' => $max_price,
                'cities' => $cities,
                'eventTypes' => $eventTypes,
                'venueTypes' => $venueTypes,
                'amenities' => $amenities,
                'features' => $features,
                'rules' => $rules,
                'venues' => $venues,

            );

            return view('search', $data);
        }


    }
}
