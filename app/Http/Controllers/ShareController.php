<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venue;

class ShareController extends Controller
{
    public function createNewVenue(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'first_name' => 'max:255',
            'last_name' => 'max:255',
            'address' => 'max:255',
            'birthday' => 'max:255',
            'sex' => 'max:255',
            'about' => 'max:255',
            'company' => 'max:255',
            'job_title' => 'max:255'
            // TODO user validation
        ]);

        if ($validator->fails()) {
            return redirect('user/profile')
                ->withErrors($validator)
                ->withInput();
        } else {

            $venue = new Venue();

            $venue->first_name = $request->get('first_name');
            $venue->last_name = $request->get('last_name');
            $venue->address = $request->get('address');
            $venue->birthday = $request->get('birthday');
            $venue->sex = $request->get('sex');
            $venue->about = $request->get('about');
            $venue->company = $request->get('company');
            $venue->job_title = $request->get('job_title');

            $venue->save($request->all());
            //dd($request->all());
        }

        return view('user/profile');
    }
}
