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

Route::get('duenos','DuenosController@Obtenertodosduenos')->name('Obtenertodoslosduenos');
Route::get('dueno','DuenosController@Obtenerdueno')->name('Obtenertodoslosduenos');
Route::post('duenos','DuenosController@CrearduenoS')->name('crearlosduenos');
Route::put('duenosedit','DuenosController@Editardueno')->name('editarlosduenos');

Route::delete('duenosborrar','DuenosController@Eliminardueno')->name('eliminalosduenos');

    //Seccion de las rutas de los carros 
Route::post('carros','CarrosController@Crearcarro')->name('crearloscarros');
Route::get('carros','CarrosController@Obtenertodoscarros')->name('Obtenertodosloscarros');
Route::delete('carros','CarrosController@Eliminarcarro')->name('borrarloscarros');
Route::put('carros','CarrosController@Editarcarros')->name('editarlosduenos');

//Seccion carro_Dueno
Route::get('duenosidcarro','Carro_duenoController@Obtenerduenoidcarro')->name('Obtenerduenoporidcarros');
Route::get('carroiddueno','Carro_duenoController@Obtenercarroiddueno')->name('Obtenercarroiddueno');
Route::delete('Eliminarduenoycarro','Carro_duenoController@Eliminarduenoycarro')->name('Eliminarduenoycarro');