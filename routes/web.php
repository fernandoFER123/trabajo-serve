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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('persona/index',"PersonaController@index");
Route::get('persona/show/{id}',"Personaler@show");


Route::get('egresados/index',"EgresadosController@index");
Route::get('egresados/show/{id}',"Egresadosler@show");
