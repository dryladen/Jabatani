<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KomoditasController;
use App\Http\Controllers\UserController;
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
// ! Dapat diakses tanpa melakukan login
Route::get('/', [AuthController::class, 'index']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'valida']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'create']);
Route::get('/dashboard', [UserController::class, 'index']);

// ! Hanya dapat diakses ketika sudah melakukan login
Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/list', [KomoditasController::class, 'index'])->name('list');
    Route::get('/single', [KomoditasController::class, 'single']);
    Route::get('/pesanan', [KomoditasController::class, 'pesanan']);
    
});

