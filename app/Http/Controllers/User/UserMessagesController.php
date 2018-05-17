<?php

namespace App\Http\Controllers\User;

use App\User;
use App\Venue;
use App\VenueBooking;
use App\VenueBookingMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserMessagesController extends Controller
{
    public function __invoke()
    {
        //TODO
        $user = Auth::user();
        $messages = VenueBooking::where('owner_id', $user->id)->orderBy('id', 'desc')->get()->toArray();

        foreach ($messages as &$message){
            $venueBookingMessage = VenueBookingMessage::where('venue_booking_id', $message['id'])->orderBy('id', 'desc')->first();
            $message['message'] = $venueBookingMessage->message;
            if($message['client_id']){
                $seneder = User::find($message['client_id']);
                $message['sender_avatar'] = $seneder->avatar;
            } else {
                $message['sender_avatar'] = 'default-avatar.jpg';
            }
            $venue = Venue::find($message['venue_id']);
            $message['venue_name'] = $venue->name;
        }

        $data = array(
            'messages' => $messages
        );
        //dump($messages);
        return view('user.messages', $data);
    }
}
