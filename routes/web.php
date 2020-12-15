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
    return view('welcome');
});

Route::get('/', 'App\Http\Controllers\PageController@index');

// dosen
Route::resource('dosen', 'App\Http\Controllers\DosenController');
// Route::post('dosen', 'App\Http\Controllers\DosenController@store');
// Route::delete('dosen/{{ $dosen->id }}/delete', 'App\Http\Controllers\DosenController@destroy');


// jadwal
Route::resource('jadwal', 'App\Http\Controllers\JadwalController');