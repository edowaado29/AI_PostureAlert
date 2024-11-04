<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', [adminController::class, 'dashboard'])->name('dashboard.admin');