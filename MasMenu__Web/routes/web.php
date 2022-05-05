<?php

use Illuminate\Support\Facades\Auth;
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

/*******************
Rutas public
 *******************/

// Pagina inicial
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

// Buscador
Route::get('/buscar', 'App\Http\Controllers\HomeController@busqueda')->name('buscar');

// Restaurante
Route::get('/restaurante/{id}', 'App\Http\Controllers\HomeController@restaurante')->name('restaurante');

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
