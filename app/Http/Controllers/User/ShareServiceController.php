<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use App\City;
use App\EventType;
use App\VenueType;
use App\VenueAmenity;
use App\VenueRule;
use App\VenueStyle;
use App\VenueFeature;
/*use Illuminate\Http\Request;
use App\Venue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Schema;*/

class ShareServiceController extends Controller
{
    public function index()
    {

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

        $data = array(
            'cities' => $cities,
            'eventTypes' => $eventTypes,
            'venueTypes' => $venueTypes,
            'amenities' => $amenities,
            'rules' => $rules,
            'styles' => $styles,
            'features' => $features,
            'weekday' => $weekday
        );

        //dump($data);
        return view('user.share-service', $data);
    }
}
