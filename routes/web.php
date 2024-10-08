<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products/{id}', [HomeController::class, 'show'])->name('home.show');




Route::prefix('cart')->middleware(['auth', 'verified', 'role:Admin'])->group(function () {
    Route::post('/', [CartController::class, 'store'])->name('cart.store');
    Route::get('/', [CartController::class, 'index'])->name('cart.index');
    Route::delete('/', [CartController::class, 'destroy'])->name('cart.destroy');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');