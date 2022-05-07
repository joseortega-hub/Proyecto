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
Route::get('/manager', 'App\Http\Controllers\PrivateController@dashboard')->name('manager');

// Editar restaurante
Route::get('/manager/restaurante/{id}', 'App\Http\Controllers\PrivateController@restaurante')->name('manager_restaurante');

// Crear resturante
Route::post('/manager/restaurante/crear', 'App\Http\Controllers\PrivateController@crearRestaurante')->name('manager_crearRestaurante');
