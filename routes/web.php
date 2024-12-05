<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\loginController;

Route::get('/', [loginController::class, 'FormLogin'])->name('login.index');
Route::post('/login', [loginController::class, 'login'])->name('login');
Route::post('/logout', [loginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    // Rute-rute admin hanya bisa diakses oleh pengguna yang sudah login
    Route::get('/dashboard', [adminController::class, 'dashboard'])->name('dashboard.admin');
    Route::get('/controller', [adminController::class, 'controller'])->name('controller.admin');
});
