<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BedroomsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\User;
use App\Http\Controllers\FakeStoreController;

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

//Rutas para las vistas del cliente
Route::view('/galeria', 'clientView.gallery')->name('index.gallery');
Route::view('/paquetes', 'clientView.plans')->name('index.plans');







//----------------------Rutas para el controlador de FakeStore----------------------//
Route::get('/products', [FakeStoreController::class, 'inicio'])->name('products.index');
Route::get('/products', [FakeStoreController::class, 'getProducts'])->name('products.index');


Route::get('/', [FakeStoreController::class, 'index']);
Route::get('/cart', [FakeStoreController::class, 'cart'])->name('cart');
Route::get('/add-to-cart/{id}', [FakeStoreController::class, 'addToCart'])->name('addToCart');

// Route::get('/carrito', [FakeStoreController::class, 'cart'])->name('products.index');


Route::get('booking/create', [BookingController::class, 'create']);












//--------------------------Rutas de autenticación--------------------------//

Route::get('login', [AuthController::class, 'index']);
Route::post('login', [AuthController::class, 'login'])->name('auth.login');

//Inicio de sesion con token
Route::middleware(['auth.token'])->group(function () {

    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');

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
