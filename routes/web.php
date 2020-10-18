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

Route::get('/editoras/cadastro', 'EditorasController@create');
Route::post('/editoras/cadastro', 'EditorasController@store')->name('registrar_editora');
Route::get('/editoras/ver/{id}', 'EditorasController@show');

Route::get('/generos/cadastro', 'GenerosController@create');
Route::post('/generos/cadastro', 'GenerosController@store')->name('registrar_genero');
Route::get('/generos/ver/{id}', 'GenerosController@show');

Route::get('/autores/cadastro', 'AutoresController@create');
Route::post('/autores/cadastro', 'AutoresController@store')->name('registrar_autor');
Route::get('/autores/ver/{id}', 'AutoresController@show');

Route::get('/livros/cadastro', 'LivrosController@create');
Route::post('/livros/cadastro', 'LivrosController@store')->name('registrar_livro');
Route::get('/livros/ver/{id}', 'LivrosController@show');

