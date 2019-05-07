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
Route::get('carros','CarrosController@Obtenertodoscarros')->name('Obtenertodosloscarros');
Route::get('duenos','DuenosController@Obtenertodosduenos')->name('Obtenertodoslosduenos');
Route::get('duenos/{id}','DuenosController@Obtenerdueno')->name('Obtenertodoslosduenos');
Route::post('duenos','DuenosController@CrearduenoS')->name('crearlosduenos');