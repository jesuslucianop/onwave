<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::get('carros','CarrosController@Obtenertodoscarros')->name('Obtenertodosloscarros');
Route::get('duenos','DuenosController@Obtenertodosduenos')->name('Obtenertodoslosduenos');
Route::get('dueno','DuenosController@Obtenerdueno')->name('Obtenertodoslosduenos');
Route::post('duenos','DuenosController@CrearduenoS')->name('crearlosduenos');
Route::put('duenosedit','DuenosController@Editardueno')->name('editarlosduenos');
Route::delete('duenosborrar','DuenosController@Eliminardueno')->name('eliminalosduenos');
Route::post('carros','CarrosController@Crearcarro')->name('crearloscarros');