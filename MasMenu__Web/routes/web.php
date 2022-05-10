<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*******************
Rutas public
 *******************/


// Pagina inicial
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
// Buscador
Route::get('/buscar', 'App\Http\Controllers\HomeController@busqueda')->name('buscar');
// Restaurante
Route::get('/restaurante/{id}', 'App\Http\Controllers\HomeController@restaurante')->name('restaurante');
// rutad de sesion
Auth::routes();


/*******************
Rutas private
 *******************/


// editar perfil usuario
Route::post('/manager/perfil/editar', 'App\Http\Controllers\PrivateController@editarPerfil')->name('editar_perfil');


// Restaurantes del usuario
Route::get('/manager', 'App\Http\Controllers\PrivateController@dashboard')->name('manager');
// restaurante
Route::get('/manager/restaurante/{id}', 'App\Http\Controllers\PrivateController@restaurante')->name('manager_restaurante');
// Crear resturante
Route::post('/manager/restaurante/crear', 'App\Http\Controllers\PrivateController@crearRestaurante')->name('manager_crearRestaurante');
// editar datos
Route::post('/manager/restaurante/{id}/datos/editar', 'App\Http\Controllers\PrivateController@editarDatos')->name('editar_datos');
// editar direccion
Route::post('/manager/restaurante/{id}/direccion/editar', 'App\Http\Controllers\PrivateController@editarDireccion')->name('editar_direccion');
// eliminar restaurante
Route::get('/manager/restaurante/{id}/eliminar', 'App\Http\Controllers\PrivateController@eliminarRestaurante')->name('eliminar_restaurante');


// crear menu
Route::post('/manager/restaurante/{id}/menu/crear', 'App\Http\Controllers\PrivateController@crearMenu')->name('crear_menu');
// eliminar menu
Route::get('/manager/menu/{id}/eliminar', 'App\Http\Controllers\PrivateController@eliminarMenu')->name('eliminar_menu');


// editar horario
Route::post('/manager/horario/{id}/editar', 'App\Http\Controllers\PrivateController@editarHorario')->name('editar_horario');


//Generar PDF
Route::get('/manager/menu/{id}/imprimir', 'App\Http\Controllers\PrivateController@imprimir')->name('print');


// editar imagen
Route::post('/manager/imagen/{id}/editar', 'App\Http\Controllers\PrivateController@editarImagen')->name('editar_imagen');
