<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Venue;

class UpdateVenueController extends Controller
{
    public function getVenue($venue_url, Request $request){


        $venue = Venue::where('url', $venue_url)->first();

        if ($venue === null) {
            return abort(404);
        } else {
            $venue_array = $venue->toArray();
//            $venue_array['city'] = $venue->city->name;
//            $venue_array['images'] = $venue->images->toArray();
//            $venue_array['eventTypes'] = $venue->eventTypes->toArray();
//            $venue_array['amenities'] = $venue->amenities->toArray();
//            $venue_array['rules'] = $venue->rules->toArray();
//            $venue_array['styles'] = $venue->styles->toArray();
//            $venue_array['rules'] = $venue->features->toArray();

            //dump($venue->toArray());
            return view('user.update-venue', $venue_array);
            //dump($venue_array);
        }
    }
}
