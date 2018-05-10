<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\ChangePhoneRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Notification;


class UserSettingsController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $data = array(
            'notifications' => $user->notifications()->pluck('id')->toArray(),
        );

        return view('user.settings', $data);
    }

    public function changeNotifications(Request $request)
    {
        DB::beginTransaction();
        try {
            Auth::user()->notifications()->sync($request->get('notifications'));
            DB::commit();
            return redirect()->back()->with("status", __('messages.notifications_changed'));
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['db_error' => __('messages.db_error')]);
        }
    }

    public function changePhone(ChangePhoneRequest $request)
    {
        if ($request->get('phone') != Auth::user()->phone) {
            //Change Phone
            $user = Auth::user();
            $user->phone = $request->get('phone');

            DB::beginTransaction();
            try {
                $user->save();
                DB::commit();
            } catch (\Exception $e) {
                DB::rollback();
                return redirect()->back()->withErrors(['db_error' => __('messages.db_error')]);
            }
        }
        return redirect()->back()->with("status", __('messages.phone_changed'));
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            // The passwords not matches
            return redirect()->back()->withErrors(['current_password' => __('passwords.passwords_not_matches')]);
        }
        if (strcmp($request->get('current_password'), $request->get('password')) == 0) {
            //Current password and new password are same
            return redirect()->back()->withErrors(['password' => __('passwords.new_password_same')]);
        }

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('password'));

        DB::beginTransaction();
        try {
            $user->save();
            DB::commit();
            return redirect()->back()->with("status", __('passwords.changed'));
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['db_error' => __('messages.db_error')]);
        }
    }
}
