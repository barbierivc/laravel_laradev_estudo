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

Route::get('/imoveis','PropertyController@index');

Route::get('/imoveis/novo','PropertyController@create');
Route::post('/imoveis/store','PropertyController@store');

Route::get('/imoveis/{slug}', 'PropertyController@Show');

Route::get('/imoveis/editar/{slug}','PropertyController@edit');
Route::put('/imoveis/update/{slug}','PropertyController@update');

Route::get('/imoveis/remover/{slug}','PropertyController@destroy');



