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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
