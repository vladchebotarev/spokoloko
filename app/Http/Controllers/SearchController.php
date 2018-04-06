<?php

namespace App\Http\Controllers;

use App\City;
use App\EventType;
use App\VenueAmenity;
use App\VenueFeature;
use App\VenueRule;
use App\VenueType;
use Illuminate\Http\Request;
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
            //dump($venue->toArray());

            $cities = City::all();
            $eventTypes = EventType::all();
            $venueTypes = VenueType::all();
            $amenities = VenueAmenity::all();
            $features = VenueFeature::all();
            $rules = VenueRule::all();

            $event_type = Input::get('eventType');

            $data = array(
                'current_city' => $city,
                'current_event_type' => $event_type,
                'cities' => $cities,
                'eventTypes' => $eventTypes,
                'venueTypes' => $venueTypes,
                'amenities' => $amenities,
                'features' => $features,
                'rules' => $rules,

            );
            //echo $city;
            //$url = $request->fullUrl();
            //echo $url;
            return view('search', $data);
        }
        //dump($data);

    }
}
