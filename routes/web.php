<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [AuthController::class, 'login'])->name('auth.login')->middleware('guest');
Route::post('/login', [AuthController::class, 'loginPost'])->name('auth.loginPost')->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/', [HomeController::class, 'index'])->name('dashboard.index')->middleware('auth');    