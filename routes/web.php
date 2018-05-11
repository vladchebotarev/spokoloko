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

Route::get('/', 'WelcomeController')->name('welcome');

Route::get('/b2b', function () {
    return view('b2b');
});



Route::get('/venues/{city_request}', 'SearchVenueController@index');

Route::post('/venues_map/{city_request}', 'SearchVenueController@getMapMarkers');

Route::get('/venue/{venue_url}', 'VenueController@getVenue');


Route::get('/services/{city_request}', 'SearchServiceController@index');


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

Route::get('/sitemap', function () {
    return view('sitemap');
});

Route::get('/contact', function () {
    return view('contact');
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
    Route::post('settings/notifications', 'User\UserSettingsController@changeNotifications')->name('settings.notifications');
    Route::post('settings/phone', 'User\UserSettingsController@changePhone')->name('settings.phone');
    Route::post('settings/password', 'User\UserSettingsController@changePassword')->name('settings.password');

    Route::get('listings', 'User\UserListingsController@index')->name('listings');

    Route::get('messages', function () {
        return view('user.messages');
    })->name('messages');


    Route::get('share', function () {
        return view('user.share');
    })->name('share');

    Route::get('share-venue', 'User\ShareVenueController@index')->name('share-venue');
    Route::post('share-venue', 'User\ShareVenueController@createNewVenue');

    Route::get('share-service', 'User\ShareServiceController@index')->name('share-service');

    Route::get('update-venue/{venue_url}', 'User\UpdateVenueController@getVenue')->name('update-venue');
    Route::post('update-venue/{venue_url}', 'User\UpdateVenueController@updateVenue');
    Route::post('update-venue/{venue_url}/delete', 'User\UpdateVenueController@deleteVenue')->name('delete-venue');

    Route::get('update-venue/{venue_url}/cover-image/{image_id}', 'User\UpdateVenueController@setCoverImage');
    Route::post('update-venue/{venue_url}/image', 'User\UpdateVenueController@uploadImages');
    Route::delete('update-venue/{venue_url}/image/{image_id}', 'User\UpdateVenueController@deleteImage');

    Route::get('update-service', 'User\UpdateServiceController@getService')->name('update-service');


});

