<?php

use App\Http\Controllers\banController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SparepartController;
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

Route::controller(SparepartController::class)->prefix("sparepart")->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::get('/create', 'create');
    Route::get('/{sparepart}', 'show');
    Route::put('/{sparepart}', 'update');
    Route::delete('/{sparepart}', 'destroy');
    Route::get('/{sparepart}/edit', 'edit');
});

Route::controller(BanController::class)->prefix("ban")->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::get('/create', 'create');
    Route::get('/{ban}', 'show');
    Route::put('/{ban}', 'update');
    Route::delete('/{ban}', 'destroy');
    Route::get('/{ban}/edit', 'edit');
});
});