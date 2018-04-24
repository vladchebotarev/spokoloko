<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{


    public function updateProfile(Request $request)
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

            $user = Auth::user();

            $user->first_name = $request->get('first_name');
            $user->last_name = $request->get('last_name');
            $user->address = $request->get('address');
            $user->birthday = $request->get('birthday');
            $user->sex = $request->get('sex');
            $user->about = $request->get('about');
            $user->company = $request->get('company');
            $user->job_title = $request->get('job_title');

            DB::beginTransaction();

            try {
                $user->save();
                DB::commit();
                // all good
            } catch (\Exception $e) {
                DB::rollback();
                // something went wrong
            }


            //dd($request->all());
        }

        return view('user/profile');
    }

    public function updateProfileImage(Request $request)
    {
        // Handle the user upload of avatar
        if ($request->has('image')) {

            $image = Image::make($request->get('image'));
            $filename = time() . '.jpg';
            $image->save(public_path('/images/avatar/' . $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return redirect('user/profile');
    }
}
