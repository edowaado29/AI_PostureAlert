<?php

use Illuminate\Routing\Route;
use App\Http\Controllers\Api\PostureImageController;
use App\Http\Controllers\Api\PostureStatusController;
use App\Http\Controllers\Api\DistanceStatusController;

Route::apiResource('posture-images', PostureImageController::class);
Route::apiResource('posture-statuses', PostureStatusController::class);
Route::apiResource('distance-statuses', DistanceStatusController::class);
