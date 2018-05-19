<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserSentMessagesController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();

        $messages = DB::select('SELECT
                                        svb.booking_number,
                                        sv.name as venue_name,
                                        sv.url as venue_url,
                                        svb.status,
                                        CONCAT(su.first_name, " ", su.last_name) AS owner_name,
                                        su.avatar AS owner_avatar,
                                        svbm.message, svbm.created_at
                                      FROM sl_venue_booking_messages svbm
                                        LEFT JOIN sl_venue_bookings svb ON svbm.venue_booking_id = svb.id
                                        LEFT JOIN sl_users su ON svb.owner_id = su.id
                                        LEFT JOIN sl_venues sv ON svb.venue_id = sv.id
                                      WHERE svb.client_id = :client_id
                                            AND svbm.id = (SELECT MAX(svbm2.id) FROM sl_venue_booking_messages svbm2 WHERE svbm.venue_booking_id=svbm2.venue_booking_id LIMIT 1)
                                      ORDER BY svbm.created_at DESC', ['client_id' => $user->id]);

        $data = array(
            'messages' => $messages
        );

        return view('user.messages-sent', $data);
    }
}
