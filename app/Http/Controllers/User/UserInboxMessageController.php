<?php

namespace App\Http\Controllers\User;

use App\User;
use App\Venue;
use App\VenueBooking;
use App\VenueBookingMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class UserInboxMessageController extends Controller
{
    public function index($booking_number)
    {
        $venueBooking = VenueBooking::where('booking_number', $booking_number)->first();

        if ($venueBooking === null or $venueBooking->owner_id != Auth::user()->id) {
            return abort(404);
        } else {

            if ($venueBooking->client_id) {
                $sender = User::find($venueBooking->client_id);
                $sender_avatar = $sender->avatar;
            } else {
                $sender_avatar = 'default-avatar.jpg';
            }

            $data = array(
                'venueBooking' => $venueBooking,
                'messages' => VenueBookingMessage::where('venue_booking_id', $venueBooking->id)->orderBy('id')->get(),
                'venue' => Venue::find($venueBooking->venue_id),
                'sender_avatar' => $sender_avatar,
            );

            //dump($data);
            return view('user.message-inbox', $data);
        }

    }


    public function sendMessage($booking_number, Request $request)
    {
        $venueBooking = VenueBooking::where('booking_number', $booking_number)->first();

        if ($venueBooking === null or $venueBooking->owner_id != Auth::user()->id) {
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
                        'sender' => 'Owner',
                        'sender_id' => Auth::user()->id,
                        'receiver_id' => $venueBooking->client_id,
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

    public function changeStatus($booking_number, Request $request)
    {
        $venueBooking = VenueBooking::where('booking_number', $booking_number)->first();

        if ($venueBooking === null or $venueBooking->owner_id != Auth::user()->id) {
            return abort(404);
        } else {
            try {
                $venueBooking->status = $request->get('status');
                $venueBooking->save();
                switch ($venueBooking->status){
                    case 'Confirmed':
                        Mail::to($venueBooking->client_email)
                            ->queue(new \App\Mail\VenueBookConfirmed(Venue::find($venueBooking->venue_id), $venueBooking->client_name));
                        break;
                    case 'Declined':
                        Mail::to($venueBooking->client_email)
                            ->queue(new \App\Mail\VenueBookDeclined(Venue::find($venueBooking->venue_id), $venueBooking->client_name));
                        break;
                }
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
