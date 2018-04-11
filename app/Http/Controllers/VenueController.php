<?php

namespace App\Http\Controllers;

use App\City;
use App\EventType;
use Illuminate\Http\Request;
use App\Venue;

class VenueController extends Controller
{

    public function getVenue($venue_url, Request $request){


        $venue = Venue::where('url', $venue_url)->first();

        if ($venue === null) {
            return abort(404);
        } else {
            $venue_array = $venue->toArray();
            $venue_array['city'] = $venue->city->name;
            $venue_array['images'] = $venue->images->toArray();
            $venue_array['eventTypes'] = $venue->eventTypes->toArray();
            $venue_array['amenities'] = $venue->amenities->toArray();
            $venue_array['rules'] = $venue->rules->toArray();
            $venue_array['styles'] = $venue->styles->toArray();
            $venue_array['rules'] = $venue->features->toArray();

            //dump($venue->toArray());
            return view('venue', $venue->toArray());
            //dump($venue_array);
        }



        //echo $venue_url;
        //$venue = Venue::find(1);

        //$city = City::find(1);
        //$venues = $city->venues;

        //$vt = EventType::find(1);

        //$vts = $venue->rules;

        //$venues = $vt->venues;
        //dump($vt->name);

        /*foreach ($vts as $vt) {

            dump($vt->name);
        }*/

        return ;
    }
    //
}
