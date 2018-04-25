<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use JD\Cloudder\Facades\Cloudder;

class UserController extends Controller
{


    public function updateProfile(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'first_name' => 'max:150',
            'last_name' => 'max:150',
            'address' => 'max:150',
            'birthday' => 'max:150',
            'sex' => 'max:150',
            'about' => 'max:150',
            'company' => 'max:150',
            'job_title' => 'max:150'
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
                return redirect('user/profile')->with('status', 'Dane zostały zaktualizowane!');
                // all good
            } catch (\Exception $e) {
                DB::rollback();
                return redirect('user/profile')->withErrors('Wystąpił błąd podczas zapisywania danych. Spróbuj jeszcze raz!');
                // something went wrong
            }
            //dd($request->all());
        }
    }

    public function updateProfileImage(Request $request)
    {
        // Handle the user upload of avatar
        if ($request->has('image')) {

            $validator = Validator::make($request->all(), [
                'image' => 'required|mimes:jpeg,bmp,jpg,png|between:1, 1000'
            ]);

            if ($validator->fails()) {
                return redirect('user/profile')
                    ->withErrors($validator);
            } else {
                $user = Auth::user();
                if($user->avatar != 'default-avatar.jpg'){
                    Cloudder::destroyImage('avatars/'.$user->avatar);
                }
                $image = $request->file('image')->getRealPath();
                $image_name = substr(md5($user->id . time()), 0, 15);
                Cloudder::upload($image, 'avatars/'.$image_name, array("format" => "jpg"));

/*              $image = Image::make($request->get('image'));
                $filename = time() . '.jpg';
                $image->save(public_path('/images/avatar/' . $filename));*/

                $user->avatar = $image_name;

                DB::beginTransaction();
                try {
                    $user->save();
                    DB::commit();
                    return redirect('user/profile')->with('status', 'Zdjęcie zostało zaktualizowane!');
                    // all good
                } catch (\Exception $e) {
                    DB::rollback();
                    return redirect('user/profile')->withErrors('Wystąpił błąd podczas zapisywania danych. Spróbuj jeszcze raz!');
                    // something went wrong
                }
            }
        }
        //return redirect('user/profile');
    }
}
