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

//Closure
Route::get('/profil', function(){
    return "ini adalah profil siswa";
})->name('profil');

//Route name
Route::get("/tesname", function(){
return route('profil');
});

//parameter
Route::get('profil/{id}', function($id){
return $id;
});

//controler
Route::get("/tescontroller", "TesController@show");

//resource
Route::resource('siswa', "SiswaController");