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

Route::get('/autor', 'AutorController@create');
Route::post('/autor', 'AutorController@store')->name('registrar_autor');

Route::get('/biblioteca', 'BibliotecaController@create');
Route::post('/biblioteca', 'BibliotecaController@store')->name('registrar_biblioteca');
