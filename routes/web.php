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

Route::get('/crud','BookController@index');

Route::get('/crud/tambah','BookController@tambah');

Route::post('/crud/store','BookController@store');

Route::get('/crud/edit/{id}','BookController@edit');

Route::post('/crud/update','BookController@update');

Route::get('/crud/hapus/{id}','BookController@hapus');

Route::get('/input', 'ValidationController@input');
 
Route::post('/proses', 'BookController@proses');

