<?php

use Illuminate\Support\Facades\Auth;
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





Route::resource('tamu', 'tamuController') ;
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');

Route::group(['middleware' => 'auth'], function() {
    Route::resource('kendaraan_dinas', 'kendaraanDinasController') ;
    Route::get('/admin_atk', function () {
        return view('page/admin_atk');
    });
    Route::resource('/surat_keluar', 'suratKeluarController');
    Route::get('/atk', function () {
        return view('page/atk');
    });

});


