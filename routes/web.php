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


// Route::get('/signup/create', 'UserController@SignUp');
// Route::post('/signup', 'UserController@postSignUp');

Route::get('/', function () {
    return view('home.home');
});

// Route Dokter
Route::get('data-dokter', 'dokterController@index');
Route::get('/data-dokter/{id}/edit', 'dokterController@edit');
Route::get('data-dokter/add-dokter', 'dokterController@create');


// Route Pasien
Route::get('/pasien', 'pasienController@index');
Route::get('pasien/add-pasien', 'pasienController@input');
Route::post('pasien', 'pasienController@store');
Route::get('/pasien/{id}/edit', "pasienController@edit");
Route::patch('/pasien/{id}', 'pasienController@update');
Route::delete('/pasien/{id}', 'pasienController@destroy');


//  Route Spesialis
Route::get('/data-spesialis', 'SpesialisController@index');
Route::post('/spesialis', 'SpesialisController@store');
Route::patch('/spesialis/update', 'SpesialisController@update');
Route::delete('/spesialis/delete', 'SpesialisController@destroy');
// Route Ruangan
Route::get('/data-ruangan', 'RuanganController@index');

// Data Gedung

Route::get('/data-gedung', 'GedungController@index');
Route::post('/data-gedung/add', 'GedungController@store');
Route::patch('/data-gedung/update', 'GedungController@update');
Route::delete('/data-gedung/delete', 'GedungController@destroy');
