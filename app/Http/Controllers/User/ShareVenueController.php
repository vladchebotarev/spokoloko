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
use Illuminate\Support\Facades\Mail;
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

    public function check(){
        echo "Dziala";
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
            'name' => 'required|max:150',
            'city' => 'required',
            'street_address' => 'required|max:150',
            'street_number' => 'max:20',
            'postal_code' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'phone' => 'required',
            'webpage' => 'max:150',
            'tripadvisor' => 'max:190',
            'facebook' => 'max:150',
            'instagram' => 'max:150',
            'description' => 'required|max:750',
            'full_description' => 'required|max:7000',
            'venue_type' => 'required',
            'event_types' => 'required',
            'area' => 'required|digits_between:1,9',
            'room_number' => 'required|digits_between:1,3',
            'restroom_number' => 'required|digits_between:1,3',
            'max_guests_standing' => 'required|digits_between:1,6',
            'max_guests_seating' => 'required|digits_between:1,6',
            'additional_rules' => 'max:7000',
            'price_hour' => 'required|regex:/\d{1,3}(?:[.,]\d{3})*(?:[.,]\d{2})/',
            'min_hours' => 'required|digits_between:1,2',
            'price_day' => 'required|regex:/\d{1,3}(?:[.,]\d{3})*(?:[.,]\d{2})/',
            'price_info' => 'max:7000',
            'security_deposit' => 'regex:/\d{1,3}(?:[.,]\d{3})*(?:[.,]\d{2})/',
            'days_full_refund' => 'nullable|digits_between:1,3',
            'cancellation_information' => 'max:7000',
            'images.*' => 'required|mimes:jpeg,bmp,jpg,png|between:1, 4000',
            'cover_image' => 'required'
        ]);

        if ($validator->fails()) {

            /*return redirect('user/share-venue')
                ->withErrors($validator)
                ->withInput();*/
            return response()->json($validator->messages(), 200);
        } else {

            //dump($request->all());

            $venue = new Venue();

            $venue->name = $request->get('name');
            $venue->user_id = Auth::user()->id;
            $venue->url = $this->generateUrl($venue->name);

            $venue->city_id = $request->get('city');
            $venue->street_address = $request->get('street_address');
            $venue->street_number = $request->get('street_number');
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
            $venue->full_description = $request->get('full_description');

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

            $venue->price_hour = str_replace(',', '.', str_replace('.', '', $request->get('price_hour')));
            $venue->price_day = str_replace(',', '.', str_replace('.', '', $request->get('price_day')));
            $venue->min_hours = $request->get('min_hours');

            if ($request->get('price_depends_on_weekday') === 'on') {
                $venue->price_depends_on_weekday = true;
            }

            $venue->price_info = $request->get('price_info');

            if ($request->get('security_deposit_not_required') != 'on') {
                $venue->security_deposit = str_replace(',', '.', str_replace('.', '', $request->get('security_deposit')));
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
            } catch (\Exception $e) {
                DB::rollback();
                return \Response::json(['status' => 'error', 'errors' => [['code' => '500', 'message' => 'Wystąpił błąd podczas zapisywania danych. Spróbuj jeszcze raz!']]]);

                /*return redirect('user/share-venue')
                    ->with('SaveError', 'Wystąpił błąd podczas zapisywania danych. Spróbuj jeszcze raz!')
                    ->withInput();*/
            }


            /**
             * Insert venue week availability.
             *
             */
            if ($request->get('availability') === 'Week') {
                $week = ['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'];
                $availability_insert = [];
                if ($request->get('week_availability') === 'All') {
                    foreach ($week as $day) {
                        $availability_insert[] = [
                            'venue_id' => $venue->id,
                            'day_week' => $day,
                            'time_from' => $request->get('week_from'),
                            'time_to' => $request->get('week_to'),
                            'created_at' => date('Y-m-d H:i:s')
                        ];
                    }
                } elseif ($request->get('week_availability') === 'Custom') {
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
                    return \Response::json(['status' => 'error', 'errors' => [['code' => '500', 'message' => 'Wystąpił błąd podczas zapisywania danych. Spróbuj jeszcze raz!']]]);
                    /*return redirect('user/share-venue')
                        ->with('SaveError', 'Wystąpił błąd podczas zapisywania danych. Spróbuj jeszcze raz!')
                        ->withInput();*/
                }
            }


            $images_insert = [];
            $coverImageSelected = false;
            foreach ($request->file('images') as $request_image) {

                $image_name = $venue->url . '-' . str_random(6);

                try {
                    Cloudder::upload($request_image->getRealPath(), 'venues/' . $venue->url . '/' . $image_name, array("format" => "jpg"));
                } catch (\Exception $e) {
                    DB::rollback();
                    return \Response::json(['status' => 'error', 'errors' => [['code' => '500', 'message' => 'Wystąpił błąd podczas zapisywania danych. Spróbuj jeszcze raz!']]]);

                    /*return redirect('user/share-venue')
                        ->with('SaveError', 'Wystąpił błąd podczas zapisywania danych. Spróbuj jeszcze raz!')
                        ->withInput();*/
                }

                $cover_on = 0;
                if($request_image->getClientOriginalName() == $request->get('cover_image') && !$coverImageSelected) {
                    $cover_on = 1;
                    $coverImageSelected = true;
                }

                $images_insert[] = [
                    'venue_id' => $venue->id,
                    'image_url' => $image_name,
                    'cover_on' => $cover_on,
                    'created_at' => date('Y-m-d H:i:s')
                ];
            }

            try {
                DB::table('venue_images')->insert($images_insert);
                DB::commit();
                //return redirect('user/listings')->with('status', 'Twoja przestrzeń została dodana i czeka na akceptację, po akceptacji otrzymasz powiadomienie!');
                Mail::to(Auth::user())
                    ->queue(new \App\Mail\VenueShared($venue, Auth::user()));
                return response()->json(['success'=>true,'url'=> route('listings') . '?share=ok']);
            } catch (\Exception $e) {
                DB::rollback();
                return \Response::json(['status' => 'error', 'errors' => [['code' => '500', 'message' => 'Wystąpił błąd podczas zapisywania danych. Spróbuj jeszcze raz!']]]);

                /*return redirect('user/share-venue')
                    ->with('SaveError', 'Wystąpił błąd podczas zapisywania danych. Spróbuj jeszcze raz!')
                    ->withInput();*/
            }

        }

    }
}
