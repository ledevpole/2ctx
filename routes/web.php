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
    return view('welcome');
});


Route::resource('meal','MealController');

Route::get('booking', function () {
    return view('booking');
});

Route::get('order', function () {
    return view('order');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

