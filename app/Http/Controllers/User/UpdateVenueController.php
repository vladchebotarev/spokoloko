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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;
use JD\Cloudder\Facades\Cloudder;

class UpdateVenueController extends Controller
{
    public function getVenue($venue_url, Request $request)
    {
        $venue = Venue::where('url', $venue_url)->first();

        if ($venue === null or $venue->user_id != Auth::user()->id) {
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
                'cities' => $cities,
                'eventTypes' => $eventTypes,
                'venueTypes' => $venueTypes,
                'amenities' => $amenities,
                'rules' => $rules,
                'styles' => $styles,
                'features' => $features,
                'weekday' => $weekday,
                'venue' => $venue,
                'venue_city' => $cities->find($venue->city_id),
                'venue_eventTypes' => $venue->eventTypes()->pluck('id')->toArray(),
                'venue_amenities' => $venue->amenities()->pluck('id')->toArray(),
                'venue_rules' => $venue->rules()->pluck('id')->toArray(),
                'venue_features' => $venue->features()->pluck('id')->toArray(),
                'venue_cover_image' => $venue->images()->where('cover_on', true)->pluck('image_url')->first(),
                'venue_images' => $venue->images,
                'venue_availability' => $venue_availability
            );

            return view('user.update-venue', $data);

        }
    }

    public function updateVenue($venue_url, Request $request)
    {
        $venue = Venue::where('url', $venue_url)->first();

        if ($venue === null or $venue->user_id != Auth::user()->id) {
            return abort(404);
        } else {
            $validator = Validator::make($request->all(), [
                'phone' => 'required|digits:9',
                'phone2' => 'nullable|digits:9',
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
                'price_hour' => 'required|regex:/^\d*(\.\d{1,2})?$/',
                'min_hours' => 'required|digits_between:1,2',
                'price_day' => 'required|regex:/^\d*(\.\d{1,2})?$/',
                'price_info' => 'max:7000',
                'security_deposit' => 'regex:/^\d*(\.\d{1,2})?$/',
                'days_full_refund' => 'nullable|digits_between:1,3',
                'cancellation_information' => 'max:7000',
                'facebook_page_id' => 'nullable|digits_between:1,25',
            ]);

            if ($validator->fails()) {
                return redirect('user/update-venue/' . $venue_url . '#section-header')
                    ->withErrors($validator)
                    ->withInput();
            } else {

                //$venue->name = $request->get('name');
                //$venue->url = $this->generateUrl($venue->name);

                //$venue->city_id = $request->get('city');
                //$venue->street_address = $request->get('street_address') . ' ' . $request->get('street_number');
                //$venue->postal_code = $request->get('postal_code');
                //$venue->lat = $request->get('lat');
                //$venue->lng = $request->get('lng');

                $venue->phone = $request->get('phone');
                $venue->phone2 = $request->get('phone2');

                $venue->webpage = $request->get('webpage');
                $venue->facebook = $request->get('facebook');
                $venue->instagram = $request->get('instagram');
                $venue->tripadvisor = $request->get('tripadvisor');

                $venue->facebook_page_id = $request->get('facebook_page_id');

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
                } else {
                    $venue->week_availability = null;
                }

                $venue->price_hour = $request->get('price_hour');
                $venue->price_day = $request->get('price_day');
                $venue->min_hours = $request->get('min_hours');

                if ($request->get('price_depends_on_weekday') === 'on') {
                    $venue->price_depends_on_weekday = 1;
                } else {
                    $venue->price_depends_on_weekday = 0;
                }

                $venue->price_info = $request->get('price_info');

                if ($request->get('security_deposit_not_required') != 'on') {
                    $venue->security_deposit = $request->get('security_deposit');
                } else {
                    $venue->security_deposit = null;
                }

                if ($request->get('cancel_book_in_eventday') != 'on') {
                    $venue->days_full_refund = $request->get('days_full_refund');
                } else {
                    $venue->days_full_refund = null;
                }

                $venue->cancellation_information = $request->get('cancellation_information');

                DB::beginTransaction();

                try {
                    $venue->save();

                    $venue->eventTypes()->sync($request->get('event_types'));
                    $venue->amenities()->sync($request->get('amenities'));
                    $venue->rules()->sync($request->get('rules'));
                    $venue->features()->sync($request->get('features'));

                    DB::table('venue_availability')->where('venue_id', $venue->id)->delete(); //TODO optimize venue availability
                    // all good
                } catch (\Exception $e) {
                    DB::rollback();
                    return redirect('user/update-venue/' . $venue_url . '#section-header')->withErrors('Wystąpił błąd podczas zapisywania danych. Spróbuj jeszcze raz!');
                    // something went wrong
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
                        //DB::table('venue_availability')->where('venue_id', $venue->id)->delete();
                        DB::table('venue_availability')->insert($availability_insert);

                    } catch (\Exception $e) {
                        DB::rollback();
                        return redirect('user/update-venue/' . $venue_url . '#section-header')->withErrors('Wystąpił błąd podczas zapisywania danych. Spróbuj jeszcze raz!');
                    }

                }


                DB::commit();
                return redirect('user/update-venue/' . $venue_url . '#section-header')->with('status', 'Dane zostały zaktualizowane!');
                //echo 'Success';
            }
        }
    }

    public function deleteVenue($venue_url)
    {
        $venue = Venue::where('url', $venue_url)->first();

        if ($venue === null or $venue->user_id != Auth::user()->id) {
            return abort(404);
        } else {
            foreach ($venue->images as $image) {
                try {
                    Cloudder::destroyImage('venues/' . $venue_url . '/' . $image->image_url);
                } catch (\Exception $e) {
                    DB::rollback();
                    return redirect('user/update-venue/' . $venue_url . '#section-header')->withErrors(__('messages.db_error'));
                }
            }

            try {
                $venue->delete();
                DB::commit();
                return redirect('user/listings')->with('status', 'Twoja przestrzeń została usunięta!');
            } catch (\Exception $e) {
                DB::rollback();
                return redirect('user/update-venue/' . $venue_url . '#section-header')->withErrors(__('messages.db_error'));
            }
        }
    }

    public function setCoverImage($venue_url, $image_id, Request $request)
    {

    }

    public function uploadImages($venue_url, Request $request)
    {
        $venue = Venue::where('url', $venue_url)->first();

        if ($venue === null or $venue->user_id != Auth::user()->id) {
            return abort(404);
        } else {
            $images_insert = [];
            $coverImageSelected = false;
            foreach ($request->file('images') as $request_image) {

                $image_name = $venue->url . '-' . str_random(6);

                try {
                    Cloudder::upload($request_image->getRealPath(), 'venues/' . $venue->url . '/' . $image_name, array("format" => "jpg"));
                } catch (\Exception $e) {
                    DB::rollback();
                    return redirect('user/share-venue')
                        ->with('SaveError', 'Wystąpił błąd podczas zapisywania danych. Spróbuj jeszcze raz!')
                        ->withInput();
                }

                $cover_on = 0;
                if ($request_image->getClientOriginalName() == $request->get('cover_image') && !$coverImageSelected) {
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
                return redirect('user/listings')->with('status', 'Twoja przestrzeń została dodana i czeka na akceptację, po akceptacji otrzymasz powiadomienie!');
            } catch (\Exception $e) {
                DB::rollback();
                return redirect('user/share-venue')
                    ->with('SaveError', 'Wystąpił błąd podczas zapisywania danych. Spróbuj jeszcze raz!')
                    ->withInput();
            }
        }
    }

    public function deleteImage()
    {

    }
}
