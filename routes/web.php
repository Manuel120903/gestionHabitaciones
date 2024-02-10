<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BedroomsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\User;

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
    return view('pages.auth.login');
});

Route::view('/inicio', 'clientView.index')->name('index.about');
Route::get('booking/create', [BookingController::class, 'create']);


//--------------------------Rutas de autenticación--------------------------//

Route::get('login', [AuthController::class, 'index']);
Route::post('login', [AuthController::class, 'login'])->name('auth.login');


Route::middleware(['auth.token'])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.dashboard.inicio');
    })->name('dashboard');

    Route::post('register', [AuthController::class, 'register']);
    // Ruta de Habitaciones
    Route::get("/bedrooms", [BedroomsController::class, "index"])->name("bedrooms.index");
    Route::post("/bedrooms", [BedroomsController::class, "store"])->name("bedrooms.store");

    //Ruta de Categorias
    Route::get("/category", [CategoryController::class, "index"])->name("category.index");
    Route::post("/category", [CategoryController::class, "store"])->name("category.store");

    //Ruta de Usuarios
    Route::get("/users", [User::class, "index"])->name("users.index");
    Route::post("/users", [User::class, "store"])->name("users.store");
});
// Route::get('/dashboard', function () {
//     return view('pages.dashboard.inicio');
// })->name('dashboard');

// Route::post('register', [AuthController::class, 'register']);
// // Ruta de Habitaciones
// Route::get("/bedrooms", [BedroomsController::class, "index"])->name("bedrooms.index");
// Route::post("/bedrooms", [BedroomsController::class, "store"])->name("bedrooms.store");

// //Ruta de Categorias
// Route::get("/category", [CategoryController::class, "index"])->name("category.index");
// Route::post("/category", [CategoryController::class, "store"])->name("category.store");

// //Ruta de Usuarios
// Route::get("/users", [User::class, "index"])->name("users.index");
// Route::post("/users", [User::class, "store"])->name("users.store");
