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

Route::get('/', function(){
	return view('layouts/index');
});

Route::group(['prefix' => 'Mahasiswa'], function(){
	Route::get('/Form/Baru', 'MahasiswaController@index');
	Route::post('/Simpan/Baru', 'MahasiswaController@store');
	Route::get('/Table', 'MahasiswaController@tabel');
	Route::get('/Form/Ubah/{id}', 'MahasiswaController@edit');
	Route::post('/Simpan/Ubah/{id}', 'MahasiswaController@update');
	Route::get('/Hapus/{id}', 'MahasiswaController@destroy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
