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

Route::get('/','ResidenciaController@index')->name('informacion');

Route::get('/conocenos','ConocenosController@index')->name('conocenos');
Route::get('/conocenos/lista','ConocenosController@lista')->name('conocenos.lista');
Route::post('/conocenos/crear','ConocenosController@crear')->name('conocenos.crear');

Route::get('/residentes','ResidentesController@index')->name('residentes');
Route::get('/residentes/registrar','ResidentesController@registrar')->name('residentes.registrar');
Route::post('/residentes/reservar','ResidentesController@reservar')->name('residentes.reservar');