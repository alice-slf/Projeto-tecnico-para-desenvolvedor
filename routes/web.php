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

Route::get('/editoras', 'EditorasController@create');
Route::post('/editoras', 'EditorasController@store')->name('registrar_editora');

Route::get('/generos', 'GenerosController@create');
Route::post('/generos', 'GenerosController@store')->name('registrar_genero');

Route::get('/autores', 'AutoresController@create');
Route::post('/autores', 'AutoresController@store')->name('registrar_autor');

