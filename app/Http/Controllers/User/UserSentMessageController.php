<?php

namespace App\Http\Controllers\User;

use App\VenueBooking;
use App\VenueBookingMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserSentMessageController extends Controller
{
    public function index($booking_number)
    {
        $venueBookingArray = DB::select('SELECT
                                            svb.id,
                                            svb.booking_number,
                                            svb.client_id, svb.book_date, svb.time_from, svb.time_to,
                                            sv.name as venue_name,
                                            sv.url as venue_url,
                                            svb.status,
                                            CONCAT(su.first_name, " ", su.last_name) AS owner_name,
                                            su.avatar AS owner_avatar,
                                            su.email AS owner_email,
                                            su.phone AS owner_phone
                                          FROM sl_venue_bookings svb
                                            LEFT JOIN sl_users su ON svb.owner_id = su.id
                                            LEFT JOIN sl_venues sv ON svb.venue_id = sv.id
                                          WHERE svb.booking_number = :book_number', ['book_number' => $booking_number]);

        $venueBooking = empty($venueBookingArray) ? null : $venueBookingArray[0];

        if ($venueBooking === null or $venueBooking->client_id != Auth::user()->id) {
            return abort(404);
        } else {
            $data = array(
                'venueBooking' => $venueBooking,
                'messages' => VenueBookingMessage::where('venue_booking_id', $venueBooking->id)->orderBy('id')->get(),
            );

            return view('user.message-sent', $data);
        }

    }

    public function sendMessage($booking_number, Request $request)
    {
        $venueBooking = VenueBooking::where('booking_number', $booking_number)->first();

        if ($venueBooking === null or $venueBooking->client_id != Auth::user()->id) {
            return abort(404);
        } else {
            $validator = Validator::make($request->all(), [
                'message' => 'required|max:1000'
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator);
            } else {
                DB::beginTransaction();
                try {
                    VenueBookingMessage::create([
                        'venue_booking_id' => $venueBooking->id,
                        'sender' => 'Client',
                        'sender_id' => Auth::user()->id,
                        'receiver_id' => $venueBooking->owner_id,
                        'message' => $request->get('message')
                    ]);
                    DB::commit();
                    return redirect()->back();
                } catch (\Exception $e) {
                    DB::rollback();
                    return redirect()->back()
                        ->with('SaveError', 'Wystąpił błąd podczas zapisywania danych. Spróbuj jeszcze raz!')
                        ->withInput();
                }


            }
        }
    }
}
