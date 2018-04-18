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

Route::get('/services', function () {
    return view('search-services');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/about', function () {
    return view('about');
});


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

    Route::post('profile', 'User\UserController@updateProfile')->name('profile.update');

    Route::post('profile/image', 'User\UserController@updateProfileImage')->name('profile.image');


    Route::get('settings', 'User\UserSettingsController@index')->name('settings');

    Route::get('listings', function () {
        return view('user.listings');
    })->name('listings');

    Route::get('messages', function () {
        return view('user.messages');
    })->name('messages');


    Route::get('share', function () {
        return view('user.share');
    })->name('share');

    Route::get('share-venue', 'ShareVenueController@index')->name('share-venue');
    Route::post('share-venue', 'ShareVenueController@createNewVenue');

    Route::get('share-service', function () {
        return view('user.share-service');
    })->name('share-service');

    Route::get('edit-venue', function () {
        return view('user.edit-venue');
    })->name('edit-venue');

    Route::get('edit-service', function () {
        return view('user.edit-service');
    })->name('edit-service');


});

