<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*******************
Rutas public
 *******************/

// Pagina inicial
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('inicio');

// Buscador
Route::get('/buscar', 'App\Http\Controllers\HomeController@busqueda')->name('buscar');

// Restaurante
Route::get('/restaurante/{id}', 'App\Http\Controllers\HomeController@restaurante')->name('restaurante');

//Login
Auth::routes();




/*******************
Rutas private
 *******************/

// Restaurantes del usuario
Route::get('/manager', function () {
    return view('private/restaurantes');
})->name('manager');

// Editar restaurantes

Route::get('/manager/restaurante', function () {
    return view('private/editarRestaurante');
})->name('manager-restaurante');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
