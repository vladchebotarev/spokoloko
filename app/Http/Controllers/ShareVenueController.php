<?php

namespace App\Http\Controllers;

use App\City;
use App\EventType;
use App\VenueType;
use App\VenueAmenity;
use App\VenueRule;
use App\VenueStyle;
use App\VenueFeature;
use Illuminate\Http\Request;
use App\Venue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Schema;

class ShareVenueController extends Controller
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


        $data = array(
            'cities' => $cities,
            'eventTypes' => $eventTypes,
            'venueTypes' => $venueTypes,
            'amenities' => $amenities,
            'rules' => $rules,
            'styles' => $styles,
            'features' => $features,
        );

        //dump($data);
        return view('user.share-venue', $data);
    }

    private static function generateUrl($venue_name)
    {
        $polish_chars_array = array(
            'Ą' => 'a',
            'Ć' => 'c',
            'Ę' => 'e',
            'Ś' => 's',
            'Ó' => 'o',
            'Ł' => 'l',
            'Ń' => 'n',
            'Ż' => 'z',
            'Ź' => 'z',
            'ą' => 'a',
            'ć' => 'c',
            'ę' => 'e',
            'ś' => 's',
            'ó' => 'o',
            'ł' => 'l',
            'ń' => 'n',
            'ż' => 'z',
            'ź' => 'z'
        );

        $url = strtr($venue_name, $polish_chars_array);
        $url = strtolower($url);

        $url = preg_replace('/[^a-z0-9\s]+/i', '', $url);
        $url = preg_replace('/\s+/', '-', $url);

        $url_tmp = $url;
        $n = 1;

        while (DB::table('venues')->where('url', $url_tmp)->first() != null) {
            $url_tmp = $url . '-' . $n++;
        }

        return $url_tmp;
    }

    public function createNewVenue(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'max:191',
            /*'last_name' => 'max:191',
            'address' => 'max:191',
            'birthday' => 'max:191',
            'sex' => 'max:191',
            'about' => 'max:191',
            'company' => 'max:191',
            'job_title' => 'max:191'*/
        ]);

        if ($validator->fails()) {
            return redirect('user/share-venue')
                ->withErrors($validator)
                ->withInput();
        } else {

            /*$venue = new Venue();
            $venue->name = $request->get('name');
            $venue->user_id = Auth::user()->id;
            $venue->url = $this->generateUrl($venue->name);
            $venue->description = $request->get('description');
            $venue->city_id = City::where('name', $request->get('city'))->first()->id;
            $venue->street_address = $request->get('street_address');
            $venue->postal_code = $request->get('postal_code');
            $venue->state = $request->get('state');
            $venue->lat = $request->get('lat');
            $venue->lng = $request->get('lng');
            $venue->phone = $request->get('phone');
            $venue->phone2 = $request->get('phone2');
            $venue->area = $request->get('area');

            $venue->save();*/
            //dd($request->all());
        }
        dump($request->all());
        //return view('user/profile');


    }
}
