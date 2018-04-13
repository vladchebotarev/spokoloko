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

Route::get('/venues/{city_request}', 'SearchController@index');
Route::post('/venues_map/{city_request}', 'SearchController@getMapMarkers');

Route::get('/venue/{venue_url}', 'VenueController@getVenue');

Route::get('/about', function () {
    return view('about');
});

Route::get('/jobs', function () {
    return view('jobs');
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


    Route::get('share', function () {
        return view('user.share');
    })->name('share');

    Route::get('share-venue', function () {
        return view('user.share-venue');
    })->name('share-venue');

    Route::get('share-business', function () {
        return view('user.share-business');
    })->name('share-business');

    Route::get('edit-venue', function () {
        return view('user.edit-venue');
    })->name('edit-venue');



});

