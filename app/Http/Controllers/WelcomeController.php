<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\EventType;

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

        return view('welcome', $data);
    }
}
