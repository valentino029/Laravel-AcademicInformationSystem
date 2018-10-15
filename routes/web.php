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

// Route::get('/', function () {
//     return view('layouts/master');
// });

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return "Hello World";
// });

// Route::get('/belajarView', function () {
//     return view('belajarView');
// });

Route::get('/home', 'HomeController@index');

Route::get('/dataguru','GuruController@index');
Route::get('/dataguru/{id}','GuruController@show');

Route::get('/akunguru','GuruController@index2');
Route::get('/akunguru/tambah','GuruController@tambah');
Route::get('/akunguru/edit/{id}','GuruController@edit');
Route::post('/akunguru/store', 'GuruController@store');
Route::put('/akunguru/update', 'GuruController@update');
Route::delete('/akunguru/{id}', 'GuruController@destroy');


Route::get('/datasiswa','SiswaController@index');
Route::get('/datasiswa/{id}','SiswaController@show');

Route::get('/akunsiswa','SiswaController@index2');
Route::get('/akunsiswa/tambah','SiswaController@tambah');
Route::get('/akunsiswa/edit/{id}','SiswaController@edit');
Route::post('/akunsiswa/store', 'SiswaController@store');
Route::put('/akunsiswa/update', 'SiswaController@update');

Route::get('/matapelajaran','MatapelajaranController@index');

Route::get('/manajemenkelas','ManajemenkelasController@index');

Route::get('/inputnilai','InputnilaiController@index');
