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


Route::get('/', function () {
    return view('welcome');
});

Route::view('/inicio', 'clientView.index')->name('index.about');
Route::view('/galeria', 'clientView.gallery')->name('index.gallery');
Route::view('/paquetes', 'clientView.plans')->name('index.plans');

Route::get('booking/create', [BookingController::class, 'create']);

