<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

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


Route::get('/booking', function () {
    return view('booking.index');
});
Route::get('booking/create', [BookingController::class, 'create']);

//RUTAS PARA LAS VISTAS PRINCIPALES
//Route::view('/index', 'index')->name('index'); // Redirecciona a la vista index.html
//Route::view('/tables', 'tables')->name('tables'); // Redirecciona a la vista about.html
//Route::view('/booking.index', 'booking')->name('booking'); // Redirecciona a la vista booking.html