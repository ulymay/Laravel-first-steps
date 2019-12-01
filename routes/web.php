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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'MiControlador@index');
Route::get('/crear', 'MiControlador@create');
Route::get('/articulos', 'MiControlador@store');
Route::get('/mostrar', 'MiControlador@show');
Route::get('/contacto', 'MiControlador@contactar');
Route::get('/galeria', 'MiControlador@galeria');