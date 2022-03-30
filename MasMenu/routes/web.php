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
    return view('home');
})->name('inicio');


Route::get('/buscar', function () {
    return view('buscar');
})->name('buscar');

Route::get('/restaurante', function () {
    return view('restaurante');
})->name('restaurante');
