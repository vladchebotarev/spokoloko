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

class ShareVenueController extends Controller
{
    public function index() {

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

    public function createNewVenue(Request $request)
    {

        /*$validator = Validator::make($request->all(), [
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

        return view('user/profile');*/


    }
}
