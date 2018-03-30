<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venue;

class VenueController extends Controller
{

    public function getVenue(Request $request){

        $venue = Venue::find(1);

        dump($venue);

        return ;
    }
    //
}
