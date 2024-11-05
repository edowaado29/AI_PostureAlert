<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', [adminController::class, 'dashboard'])->name('dashboard.admin');
Route::get('/controller', [adminController::class, 'controller'])->name('controller.admin');
Route::get('/laporan', [adminController::class, 'laporan'])->name('laporan.admin');