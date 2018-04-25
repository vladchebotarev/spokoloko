<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserSettingsController extends Controller
{
    public function index (Request $request){
        //dump($request->session()->all());
        echo time();
        dump($request->session());
        $sessions = Auth::user()->sessions;

        foreach ($sessions as $session){
            $session->user_agent;
        }
        //dump($sessions);
        $date = date('Y-m-d H:i:s', strtotime('-1 hour'));
        echo 'John visited last ' . $date;
        return view('user.settings');
    }
}
