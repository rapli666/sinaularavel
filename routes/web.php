<?php

use Illuminate\Support\Facades\Route;


Route::get ('/', function(){
	return view('home');
});

Route::get ('/about', function(){
	return view('about');
});
 
 Route::get('/siswa', 'SiswaController@index')->name('siswa.view');
 Route::get('/siswa/siswatambah', 'SiswaController@create');
 Route::post('/siswa/store', 'SiswaController@store')->name('siswa.store');
 Route::post('/siswa/{id}', 'SiswaController@show')->name('siswa.show');
 Route::get('/siswa/edit/{id}', 'siswaController@edit')->name('siswa.edit');
Route::put('/siswa/update/{id}', 'siswaController@update')->name('siswa.update');
 Route::delete('/siswa/delete/{id}', 'SiswaController@hapus')->name('siswa.hapus');
