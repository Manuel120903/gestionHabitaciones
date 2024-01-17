<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and assigned to the "web" middleware group.
| Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//RUTAS PARA LAS VISTAS PRINCIPALES
Route::view('/index', 'index')->name('index'); // Redirecciona a la vista index.html
Route::view('/tables', 'tables')->name('tables'); // Redirecciona a la vista about.html