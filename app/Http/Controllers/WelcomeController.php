<?php

namespace App\Http\Controllers;

use App\Venue;
use Illuminate\Http\Request;
use App\City;
use App\EventType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $cities = City::all();
        $eventTypes = EventType::all();

        $data = array(
            'cities' => $cities,
            'eventTypes' => $eventTypes,
        );

        //return view('welcome', $data);
        $venue = Venue::find(5);
        Mail::to($venue->user)
            ->queue(new \App\Mail\VenueBookRequestOwner($venue, $venue->user, '123456'));
        return (new \App\Mail\VenueBookRequestOwner($venue, $venue->user, '123456'))->render();
    }
}
