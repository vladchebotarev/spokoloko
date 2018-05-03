<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Venue;
use App\City;
use App\EventType;
use App\VenueType;
use App\VenueAmenity;
use App\VenueRule;
use App\VenueStyle;
use App\VenueFeature;
use Illuminate\Support\Facades\DB;

class UpdateVenueController extends Controller
{
    public function getVenue($venue_url, Request $request){


        $venue = Venue::where('url', $venue_url)->first();

        if ($venue === null) {
            return abort(404);
        } else {

            $cities = City::all();
            $eventTypes = EventType::all();
            $venueTypes = VenueType::all();
            $amenities = VenueAmenity::all();
            $rules = VenueRule::all();
            $styles = VenueStyle::all();
            $features = VenueFeature::all();

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
                    $venue_availability = DB::table('venue_availability')->where('venue_id', $venue->id)->select('time_from', 'time_to')->first();
                } elseif ($venue->week_availability == 'Custom') {
                    $availability_query = DB::table('venue_availability')->where('venue_id', $venue->id)->select('day_week', 'time_from', 'time_to')->get();
                    foreach ($availability_query as $row) {
                        $venue_availability[$row->day_week] = [
                            'time_from' => $row->time_from,
                            'time_to' => $row->time_to
                        ];
                    }
                    //echo $venue_availability['kk']['time_from'];
                }
            }

            $data = array(
                'cities' => $cities,
                'eventTypes' => $eventTypes,
                'venueTypes' => $venueTypes,
                'amenities' => $amenities,
                'rules' => $rules,
                'styles' => $styles,
                'features' => $features,
                'weekday' => $weekday,
                'venue' => $venue,
                'venue_eventTypes' => $venue->eventTypes()->pluck('id')->toArray(),
                'venue_amenities' => $venue->amenities()->pluck('id')->toArray(),
                'venue_rules' => $venue->rules()->pluck('id')->toArray(),
                'venue_features' => $venue->features()->pluck('id')->toArray(),
                'venue_cover_image' => $venue->images()->where('cover_on', true)->pluck('image_url')->first(),
                'venue_images' => $venue->images()->pluck('image_url')->toArray(),
                'venue_availability' => $venue_availability
            );

            return view('user.update-venue', $data);

        }
    }
}
