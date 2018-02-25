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


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
/*Reservation Controller*/
Route::get('/prestations', 'PrestationsController@index');
Route::get('/calendar', function () {
    return view('calendar');
});
/*Reservation Controller*/
Route::get('/reservations/reserver', 'RendezvousController@index');
Route::post('reservations', 'RendezvousController@createRDV');

/*TEST Controller*/
Route::get('/test', 'HorairesController@index');


/*Register Controller*/
Route::get('verifyEmailFirst', 'Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
Route::get('verify/{email}/{verifyToken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');
