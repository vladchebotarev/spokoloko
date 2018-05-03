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
use Illuminate\Http\Request;
use App\Venue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Schema;
use JD\Cloudder\Facades\Cloudder;

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


    /**
     * Create new venue in system.
     *
     * @param $request
     * @return redirect
     */

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
            //$venue = Venue::find(1);
            $venue = new Venue();

            $venue->name = $request->get('name');
            $venue->user_id = Auth::user()->id;
            $venue->url = $this->generateUrl($venue->name);

            $venue->city_id = $request->get('city');
            $venue->street_address = $request->get('street_address') . ' ' . $request->get('street_number');
            $venue->postal_code = $request->get('postal_code');
            $venue->lat = $request->get('lat');
            $venue->lng = $request->get('lng');

            $venue->phone = $request->get('phone');
            $venue->phone2 = $request->get('phone2');

            $venue->webpage = $request->get('webpage');
            $venue->facebook = $request->get('facebook');
            $venue->instagram = $request->get('instagram');
            $venue->tripadvisor = $request->get('tripadvisor');

            $venue->description = $request->get('description');
            //$venue->full_description = $request->get('full_description');

            $venue->venue_type_id = $request->get('venue_type');
            $venue->venue_style_id = $request->get('venue_style');


            $venue->area = $request->get('area');
            $venue->room_number = $request->get('room_number');
            $venue->restroom_number = $request->get('restroom_number');
            $venue->max_guests_standing = $request->get('max_guests_standing');
            $venue->max_guests_seating = $request->get('max_guests_seating');

            $venue->additional_rules = $request->get('additional_rules');

            $venue->availability_type = $request->get('availability');

            if ($request->get('availability') === 'Week') {
                $venue->week_availability = $request->get('week_availability');
            }


            $venue->price_hour = $request->get('price_hour');
            $venue->price_day = $request->get('price_day');
            $venue->min_hours = $request->get('min_hours');

            if ($request->get('price_depends_on_weekday') === 'on') {
                $venue->price_depends_on_weekday = true;
            }

            $venue->price_info = $request->get('price_info');

            if ($request->get('security_deposit_not_required') != 'on') {
                $venue->security_deposit = $request->get('security_deposit');
            }

            if ($request->get('cancel_book_in_eventday') != 'on') {
                $venue->days_full_refund = $request->get('days_full_refund');
            }

            $venue->cancellation_information = $request->get('cancellation_information');

            DB::beginTransaction();

            try {
                $venue->save();

                $venue->eventTypes()->attach($request->get('event_types'));
                $venue->amenities()->attach($request->get('amenities'));
                $venue->rules()->attach($request->get('rules'));
                $venue->features()->attach($request->get('features'));

                // all good
            } catch (\Exception $e) {
                DB::rollback();
                return redirect('user/share-venue')->withErrors('Wystąpił błąd podczas zapisywania danych. Spróbuj jeszcze raz!');
                // something went wrong
            }


            /**
             * Insert venue week availability.
             *
             */
            if ($request->get('availability') === 'Week') {
                $week = ['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'];
                $availability_insert = [];
                if ($request->get('week_availability') === 'all') {
                    foreach ($week as $day) {
                        $availability_insert[] = [
                            'venue_id' => $venue->id,
                            'day_week' => $day,
                            'time_from' => $request->get('week_from'),
                            'time_to' => $request->get('week_to'),
                            'created_at' => date('Y-m-d H:i:s')
                        ];
                    }
                    DB::table('venue_availability')->insert($availability_insert);
                } elseif ($request->get('week_availability') === 'custom') {
                    foreach ($week as $day) {
                        if ($request->get('week_day_' . $day) === 'on') {
                            $availability_insert[] = [
                                'venue_id' => $venue->id,
                                'day_week' => $day,
                                'time_from' => $request->get($day . '_from'),
                                'time_to' => $request->get($day . '_to'),
                                'created_at' => date('Y-m-d H:i:s')
                            ];
                        }
                    }

                }

                try {
                    DB::table('venue_availability')->insert($availability_insert);

                } catch (\Exception $e) {
                    DB::rollback();
                    return redirect('user/share-venue')->withErrors('Wystąpił błąd podczas zapisywania danych. Spróbuj jeszcze raz!');
                }

            }

            $n = 1;
            $images_insert = [];
            foreach ($request->file('images') as $request_image) {
                $image = $request_image->getRealPath();
                $image_name = $venue->url . '-' . $n++;
                Cloudder::upload($image, 'venues/' . $venue->url . '/' . $image_name, array("format" => "jpg"));
                $images_insert[] = [
                    'venue_id' => $venue->id,
                    'image_url' => $image_name,
                    'cover_on' => 0,
                    'created_at' => date('Y-m-d H:i:s')
                ];
                /*$image = Image::make($request_image);
                $filename = $venue->url . '-' . $n++.'.jpg';
                $image->save(public_path('/images/venues/' . $filename));*/
            }

            try {
                DB::table('venue_images')->insert($images_insert);
                DB::commit();
                //return redirect('user/profile')->with('status', 'Przes!');
                echo 'Success';
            } catch (\Exception $e) {
                DB::rollback();
                return redirect('user/share-venue')->withErrors('Wystąpił błąd podczas zapisywania danych. Spróbuj jeszcze raz!');
            }


//            $venue->name = $request->get('name');
//            $venue->user_id = Auth::user()->id;
//            $venue->venue_type_id = $request->get('venue_type');
//            $venue->url = $this->generateUrl($venue->name);
//            $venue->description = $request->get('description');
//            $venue->city_id = $request->get('city');
//            $venue->street_address = $request->get('street_address');
//            $venue->postal_code = '12-345';
//            $venue->state = 'malopolska';
//            $venue->lat = 52.240414;
//            $venue->lng = 21.007986;
//            $venue->phone = $request->get('phone');
//            $venue->phone2 = $request->get('phone2');
//            $venue->area = 100;
//            $venue->room_number = 2;
//            $venue->restroom_number = 2;
//            $venue->price_hour = 500;
//            $venue->price_day = 500;
//            $venue->min_hours = 1;
//            $venue->price_info = $request->get('price_info');
//            $venue->security_deposit = $request->get('security_deposit');
//            $venue->max_guests_standing = 100;
//            $venue->max_guests_seating = 100;
            /*$venue->webpage = $request->get('webpage');
            $venue->facebook = $request->get('facebook');
            $venue->instagram = $request->get('instagram');
            $venue->tripadvisor = $request->get('tripadvisor');*/

            //$venue->save();

//            if ($request->get('availability') === 'Week') {
//                if ($request->get('week_availability') === 'all') {
//
//                } elseif ($request->get('week_availability') === 'custom') {
//
//                }
//            }

            /*$venue->eventTypes()->attach($request->get('event_types'));
            $venue->amenities()->attach($request->get('amenities'));
            $venue->rules()->attach($request->get('rules'));
            $venue->styles()->attach($request->get('styles'));
            $venue->features()->attach($request->get('features'));*/


//            $n=1;
//            foreach ($request->file('images') as $request_image) {
//                $image = Image::make($request_image);
//                $filename = $venue->url . '-' . $n++.'.jpg';
//                $image->save(public_path('/images/venues/' . $filename));
//            }

            //dump($request->all());
        }

        //return view('user/profile');
    }
}
