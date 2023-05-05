<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
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
//Dashboard
Route::get('/', [DashboardController::class, 'dashboard'])->name('Dashboard');

//login
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/store', [LoginController::class , 'store'])->name('login.post');
//Register
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'postRegister'])->name('register.post');