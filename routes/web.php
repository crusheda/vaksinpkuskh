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

Route::get('/welcome', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/login', function () {
//     return view('auth.login');
// });

// Route::get('/vaksin', function () {
//     return view('pages.vaksin.index');
// });
Route::resource('/', 'vaksin\vaksinController');
Route::resource('/peserta', 'vaksin\pesertaVaksinController');
Route::resource('/jenis', 'vaksin\jenisVaksinController');
Route::resource('/tanggal', 'vaksin\tglVaksinController');

Route::get('api/all/{id}', 'vaksin\vaksinController@apiAll')->name('api.all');
Route::get('api/tgl/{id}', 'vaksin\vaksinController@apiGetTgl')->name('api.tgl');
Route::get('api/jam/{id}', 'vaksin\vaksinController@apiGetJam')->name('api.jam');
Route::get('api/kuota/{id}', 'vaksin\vaksinController@apiGetKuota')->name('api.kuota');
