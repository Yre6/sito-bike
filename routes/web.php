<?php

use Illuminate\Support\Facades\Route;


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
    return view('homepage');
})->name('homepage');

Route::get('/sezioni', function () {
    return view('guest.sections');
})->name('sections');

/* Route::get('/percorsi', function () {
    return view('guest.tours.index');
})->name('guest.tours.index'); */

Route::get('/percorsi', 'TourController@valleys')->name('guest.valleys'); 

Route::get('/percorsi/{valley:slug}', 'TourController@index')->name('guest.index'); 

/* Route::get('/percorsi/{valley:slug}/{tour:slug}', 'TourController@show')->name('guest.show'); */
