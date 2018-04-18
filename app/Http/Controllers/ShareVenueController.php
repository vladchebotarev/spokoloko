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


    /**
     * Generate url address for new venue.
     *
     * @param $venue_name
     * @return string
     */
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

            $venue = new Venue();

           /* $venue->name = $request->get('name');
            $venue->user_id = Auth::user()->id;
            $venue->venue_type_id = $request->get('venue_type');
            $venue->url = $this->generateUrl($venue->name);
            $venue->description = $request->get('description');
            $venue->city_id = $request->get('city');
            $venue->street_address = $request->get('street_address');
            $venue->postal_code = $request->get('postal_code');
            $venue->state = $request->get('state');
            $venue->lat = $request->get('lat');
            $venue->lng = $request->get('lng');
            $venue->phone = $request->get('phone');
            $venue->phone2 = $request->get('phone2');
            $venue->area = $request->get('area');
            $venue->room_number = $request->get('room_number');
            $venue->restroom_number = $request->get('restroom_number');
            $venue->price_hour = $request->get('price_hour');
            $venue->price_day = $request->get('price_day');
            $venue->min_hours = $request->get('min_hours');
            $venue->price_info = $request->get('price_info');
            $venue->security_deposit = $request->get('security_deposit');
            $venue->max_guests_standing = $request->get('max_guests_standing');
            $venue->max_guests_seating = $request->get('max_guests_seating');
            $venue->webpage = $request->get('webpage');
            $venue->facebook = $request->get('facebook');
            $venue->instagram = $request->get('instagram');
            $venue->tripadvisor = $request->get('tripadvisor');*/

            $venue->name = $request->get('name');
            $venue->user_id = Auth::user()->id;
            $venue->venue_type_id = $request->get('venue_type');
            $venue->url = $this->generateUrl($venue->name);
            $venue->description = $request->get('description');
            $venue->city_id = $request->get('city');
            $venue->street_address = $request->get('street_address');
            $venue->postal_code = '12-345';
            $venue->state = 'malopolska';
            $venue->lat = 52.240414;
            $venue->lng = 21.007986;
            $venue->phone = $request->get('phone');
            $venue->phone2 = $request->get('phone2');
            $venue->area = 100;
            $venue->room_number = 2;
            $venue->restroom_number = 2;
            $venue->price_hour = 500;
            $venue->price_day = 500;
            $venue->min_hours = 1;
           // $venue->price_info = $request->get('price_info');
            //$venue->security_deposit = $request->get('security_deposit');
            $venue->max_guests_standing = 100;
            $venue->max_guests_seating = 100;
            /*$venue->webpage = $request->get('webpage');
            $venue->facebook = $request->get('facebook');
            $venue->instagram = $request->get('instagram');
            $venue->tripadvisor = $request->get('tripadvisor');*/

            $venue->save();

            $venue->eventTypes()->attach($request->get('event_types'));
            $venue->amenities()->attach($request->get('amenities'));
            $venue->rules()->attach($request->get('rules'));
            $venue->styles()->attach($request->get('styles'));
            $venue->features()->attach($request->get('features'));

            dump($request->all());
        }

        //return view('user/profile');
    }
}
