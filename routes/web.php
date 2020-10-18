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
Route::get('/editoras/editar/{id}', 'EditorasController@edit');
Route::post('/editoras/editar/{id}', 'EditorasController@update')->name('editar_editora');
Route::get('/editoras/deletar/{id}', 'EditorasController@delete');
Route::post('/editoras/deletar/{id}', 'EditorasController@destroy')->name('excluir_editora');

Route::get('/generos/cadastro', 'GenerosController@create');
Route::post('/generos/cadastro', 'GenerosController@store')->name('registrar_genero');
Route::get('/generos/ver/{id}', 'GenerosController@show');
Route::get('/generos/editar/{id}', 'GenerosController@edit');
Route::post('/generos/editar/{id}', 'GenerosController@update')->name('editar_genero');
Route::get('/generos/deletar/{id}', 'GenerosController@delete');
Route::post('/generos/deletar/{id}', 'GenerosController@destroy')->name('excluir_genero');

Route::get('/autores/cadastro', 'AutoresController@create');
Route::post('/autores/cadastro', 'AutoresController@store')->name('registrar_autor');
Route::get('/autores/ver/{id}', 'AutoresController@show');
Route::get('/autores/editar/{id}', 'AutoresController@edit');
Route::post('/autores/editar/{id}', 'AutoresController@update')->name('editar_autor');
Route::get('/autores/deletar/{id}', 'AutoresController@delete');
Route::post('/autores/deletar/{id}', 'AutoresController@destroy')->name('excluir_autor');

Route::get('/livros/cadastro', 'LivrosController@create');
Route::post('/livros/cadastro', 'LivrosController@store')->name('registrar_livro');
Route::get('/livros/ver/{id}', 'LivrosController@show');
Route::get('/livros/editar/{id}', 'LivrosController@edit');
Route::post('/livros/editar/{id}', 'LivrosController@update')->name('editar_livro');
Route::get('/livros/deletar/{id}', 'LivrosController@delete');
Route::post('/livros/deletar/{id}', 'LivrosController@destroy')->name('excluir_livro');

