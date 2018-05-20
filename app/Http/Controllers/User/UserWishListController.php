<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserWishListController extends Controller
{
    public function getVenueWishList()
    {
        $user = Auth::user();


        $venues = DB::table('venue_wishlist')
            ->where('venue_wishlist.user_id', $user->id)
            ->leftJoin('venues', 'venue_wishlist.venue_id', '=', 'venues.id')
            ->leftJoin('venuetypes', 'venues.venue_type_id', '=', 'venuetypes.id')
            ->leftJoin('venue_images', 'venues.id', '=', 'venue_images.venue_id')
            ->where('cover_on', true)
            ->select('venues.id', 'venues.name', 'venues.url', 'venues.street_address', 'venues.street_number', 'venues.area', 'venues.max_guests_standing',
                DB::raw('price_hour*min_hours as min_price'), 'venues.min_hours', 'venue_images.image_url', 'venuetypes.name as venue_type')
            ->get();

        $data = array(
            'venues' => $venues,
        );

        return view('user.venue-wish-list', $data);
    }

    public function addToVenueWishList(Request $request)
    {
        DB::beginTransaction();
        try {
            DB::table('venue_wishlist')->insert([
                'user_id' => Auth::user()->id, 'venue_id' => $request->get('venue_id')
            ]);
            DB::commit();
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()
                ->with('SaveError', 'Wystąpił błąd podczas zapisywania danych. Spróbuj jeszcze raz!');
        }
    }

    public function removeFromVenueWishList(Request $request)
    {
        DB::beginTransaction();
        try {
            DB::table('venue_wishlist')->where([
                ['user_id', Auth::user()->id],
                ['venue_id', $request->get('venue_id')]
            ])->delete();
            DB::commit();
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()
                ->with('SaveError', 'Wystąpił błąd podczas zapisywania danych. Spróbuj jeszcze raz!');
        }
    }
}
