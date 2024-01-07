<?php

use App\Http\Controllers\MotorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\SelesaiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', [HomeController::class, 'index']);


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/', [HomeController::class, 'index']);
Route::middleware(['auth'])->group(function () {

    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::controller(RentalController::class)->prefix("rental")->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::get('/create', 'create');
    Route::get('/{rental}', 'show');
    Route::put('/{rental}', 'update');
    Route::delete('/{rental}', 'destroy');
    Route::get('/{rental}/edit', 'edit');
});

Route::controller(MotorController::class)->prefix("motor")->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::get('/create', 'create');
    Route::get('/{motor}', 'show');
    Route::put('/{motor}', 'update');
    Route::delete('/{motor}', 'destroy');
    Route::get('/{motor}/edit', 'edit');
});
Route::controller(SelesaiController::class)->prefix("selesai")->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::get('/create', 'create');
    Route::get('/{selesai}', 'show');
    Route::put('/{selesai}', 'update');
    Route::delete('/{selesai}', 'destroy');
    Route::get('/{selesai}/edit', 'edit');
});
});