<?php

namespace App\Http\Controllers;

use App\Http\Requests\VenueBookingRequest;
use App\User;
use App\Venue;
use App\VenueBooking;
use App\VenueBookingMessage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class VenueBookingController extends Controller
{
    public function sendBookingRequest(VenueBookingRequest $request)
    {
        $venue = Venue::find($request->get('venue_id'));

        if ($venue === null) {
            return abort(404);
        } else {

            $sender = User::find($request->get('sender_id'));

            DB::beginTransaction();
            try {
                $venueBooking = VenueBooking::create([
                    'booking_number' => str_random(10),
                    'venue_id' => $venue->id,
                    'owner_id' => $venue->user_id,
                    'client_id' => $sender === null ? null : $sender->id,
                    'client_name' => $request->get('name'),
                    'client_email' => $request->get('email'),
                    'client_phone' => $request->get('phone'),
                    'book_date' => $request->get('book_date'),
                    'time_from' => $request->get('time_from'),
                    'time_to' => $request->get('time_to'),
                ]);


                VenueBookingMessage::create([
                    'venue_booking_id' => $venueBooking->id,
                    'sender' => 'Client',
                    'sender_id' => $venueBooking->client_id,
                    'receiver_id' => $venueBooking->owner_id,
                    'message' => $request->get('message'),
                ]);
                DB::commit();

                Mail::to($venueBooking->client_email)
                    ->queue(new \App\Mail\VenueBookRequest($venue, $venueBooking->client_name));

                Mail::to($venue->user)
                    ->queue(new \App\Mail\VenueBookRequestOwner($venue, $venue->user, $venueBooking->booking_number));

                echo 'Success';
            } catch (\Exception $e) {
                DB::rollback();
                //return redirect('user/profile')->withErrors('Wystąpił błąd podczas zapisywania danych. Spróbuj jeszcze raz!');
                echo 'Error';
            }
        }
    }
}
