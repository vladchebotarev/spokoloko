<?php

namespace App\Http\Controllers\User;

use App\Venue;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserListingsController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();

        $venues = DB::table('venues')
            ->where('user_id', $user->id)
            ->leftJoin('venuetypes', 'venues.venue_type_id', '=', 'venuetypes.id')
            ->leftJoin('venue_images', 'venues.id', '=', 'venue_images.venue_id')
            ->where('cover_on', true)
            ->select('venues.name', 'venues.url', 'venues.street_address', 'venues.street_number', 'venues.area', 'venues.max_guests_standing',
                DB::raw('price_hour*min_hours as min_price'), 'venues.min_hours', 'venue_images.image_url', 'venuetypes.name as venue_type')
            ->get();

        $data = array(
            'venues' => $venues,
        );

        //dump($venues);

        return view('user.listings', $data);
    }
}
