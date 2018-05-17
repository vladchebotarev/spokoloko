<?php

namespace App\Http\Controllers\User;

use App\User;
use App\Venue;
use App\VenueBooking;
use App\VenueBookingMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserMessageController extends Controller
{
    public function index($booking_number)
    {
        $venueBooking = VenueBooking::where('booking_number', $booking_number)->first();

        if ($venueBooking === null or $venueBooking->owner_id != Auth::user()->id) {
            return abort(404);
        } else {

            if($venueBooking->client_id){
                $seneder_avatar = User::find($venueBooking->client_id)->pluck('avatar');
            } else {
                $seneder_avatar = 'default-avatar.jpg';
            }

            $data = array(
                'venueBooking' => $venueBooking,
                'messages' => VenueBookingMessage::where('venue_booking_id', $venueBooking->id)->orderBy('id')->get(),
                'venue' => Venue::find($venueBooking->venue_id),
                'sender_avatar' => $seneder_avatar,
            );

            //dump($data);
            return view('user.message', $data);
        }

    }
}
