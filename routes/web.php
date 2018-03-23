<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/b2b', function () {
    return view('b2b');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/venue', function () {
    return view('venue');
});

Route::get('/about', function () {
    return view('about');
});


Auth::routes();

// OAuth Routes
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'user',  'middleware' => ['auth', 'web']], function() {
    Route::get('profile', function () {
        return view('user.profile');
    })->name('profile');

    Route::get('profile/verification', function () {
        return view('user.verification');
    })->name('verification');

    Route::post('profile', 'UserController@updateProfile')->name('profile.update');

    Route::post('profile/image', 'UserController@updateProfileImage')->name('profile.image');


    Route::get('settings', function () {
        return view('user.settings');
    })->name('settings');

    Route::get('listings', function () {
        return view('user.listings');
    })->name('listings');

    Route::get('messages', function () {
        return view('user.messages');
    })->name('messages');



});