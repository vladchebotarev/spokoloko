<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venue;

class ShareController extends Controller
{
    public function createNewVenue(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'first_name' => 'max:191',
            'last_name' => 'max:191',
            'address' => 'max:191',
            'birthday' => 'max:191',
            'sex' => 'max:191',
            'about' => 'max:191',
            'company' => 'max:191',
            'job_title' => 'max:191'
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
