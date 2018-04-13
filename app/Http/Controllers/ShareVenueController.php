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
use Illuminate\Support\Facades\Schema;

class ShareVenueController extends Controller
{
    public function index() {

        echo $this->generateUrl('ĘÓĄŚŁŻŹĆŃ  "" ęóąśłżźń  !@#$%^&*()_+=-09/.,');
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

        $url = strtr( $venue_name, $polish_chars_array );
        $url = strtolower($url);

        $url =  preg_replace('/[^a-z0-9\s]+/i', '', $url);
        $url = preg_replace('/\s+/', '-', $url);

        $url_tmp = $url;
        $n = 1;

        /*while (DB::table('venues')->where('url', $url_tmp)->first() != null){
            $url_tmp = $url . '-' . $n++;
        }*/

        return $url;
    }

    public function createNewVenue(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'max:191',
            'last_name' => 'max:191',
            'address' => 'max:191',
            'birthday' => 'max:191',
            'sex' => 'max:191',
            'about' => 'max:191',
            'company' => 'max:191',
            'job_title' => 'max:191'
        ]);

        if ($validator->fails()) {
            return redirect('user/profile')
                ->withErrors($validator)
                ->withInput();
        } else {

            $venue = new Venue();
            $venue->user_id = Auth::user()->id;
            $venue->name = $request->get('name');
            $venue->first_name = $request->get('first_name');
            $venue->last_name = $request->get('last_name');
            $venue->address = $request->get('address');
            $venue->birthday = $request->get('birthday');
            $venue->sex = $request->get('sex');
            $venue->about = $request->get('about');
            $venue->company = $request->get('company');
            $venue->job_title = $request->get('job_title');

            $venue->save($request->all());
            //dd($request->all());
        }

        return view('user/profile');


    }
}
