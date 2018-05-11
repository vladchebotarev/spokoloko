<?php

namespace App\Http\Controllers;

use App\City;
use App\VenueStyle;
use App\VenueType;
use Illuminate\Http\Request;
use App\Venue;
use Illuminate\Support\Facades\DB;

class VenueController extends Controller
{

    public function getVenue($venue_url, Request $request){

        $venue = Venue::where('url', $venue_url)->first();

        if ($venue === null) {
            return abort(404);
        } else {
            $weekday = array(
                'mon' => 'Poniedziałek',
                'tue' => 'Wtorek',
                'wed' => 'Środa',
                'thu' => 'Czwartek',
                'fri' => 'Piątek',
                'sat' => 'Sobota',
                'sun' => 'Niedziela',
            );

            $venue_availability = [];

            if ($venue->availability_type == 'Week') {
                if ($venue->week_availability == 'All') {
                    $venue_availability = DB::table('venue_availability')->where('venue_id', $venue->id)
                        ->select('time_from', 'time_to')->first();
                } elseif ($venue->week_availability == 'Custom') {
                    $availability_query = DB::table('venue_availability')->where('venue_id', $venue->id)
                        ->select('day_week', 'time_from', 'time_to')->get();
                    foreach ($availability_query as $row) {
                        $venue_availability[$row->day_week] = [
                            'time_from' => $row->time_from,
                            'time_to' => $row->time_to
                        ];
                    }
                }
            }

            $data = array(
                'weekday' => $weekday,
                'venue' => $venue,
                'venue_city' => City::find($venue->city_id)->name,
                'venue_type' => VenueType::find($venue->venue_type_id)->name,
                'venue_style' => VenueStyle::find($venue->venue_style_id)->name,
                'venue_eventTypes' => $venue->eventTypes()->pluck('id')->toArray(),
                'venue_amenities' => $venue->amenities()->pluck('id')->toArray(),
                'venue_rules' => $venue->rules()->pluck('id')->toArray(),
                'venue_features' => $venue->features()->pluck('id')->toArray(),
                'venue_cover_image' => $venue->images()->where('cover_on', true)->pluck('image_url')->first(),
                'venue_images' => $venue->images,
                'venue_availability' => $venue_availability
            );
            return view('venue', $data);
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
