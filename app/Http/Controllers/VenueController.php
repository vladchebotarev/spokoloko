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
            return redirect('/');
        } else {
            //dump($venue->toArray());
            return view('venue', $venue->toArray());
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
