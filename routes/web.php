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
    return view('user/home');
});

Route::get('/absen', function () {
    return view('user/absen');
});

Route::post('/absen/store', 'AbsenController@store');

Route::get('/absen/kehadiran', 'AbsenController@cari');

Route::get('/cekabsen', function () {
return view('user/cekabsen');
});

Route::get('/admin', 'AbsenController@index');

Route::get('/admin/edit/{{id}}', 'AbsenController@update');

Route::get('/admin/hapus/{{$absen->id}}', 'AbsenController@destroy');