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
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Authorization,Origin, Content-Type, X-Auth-Token, X-XSRF-TOKEN');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('persona', 'personasController@index');
Route::get('persona/{id}', 'personasController@show');
Route::post('persona', 'personasController@create');
Route::put('persona/{id}', 'personasController@update');
Route::delete('persona/{id}', 'personasController@destroy');


Route::get('egresados', 'egresadoController@index');
Route::get('egresados/{id}', 'egresadoController@show');
Route::post('egresados', 'egresadoController@create');
Route::put('egresados/{id}', 'egresadoController@update');
Route::delete('egresados/{id}', 'egresadoController@destroy');
