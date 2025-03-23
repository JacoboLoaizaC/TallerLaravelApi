<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::middleware('api')->group(function () {
    // Define tus rutas API aquí
    Route::apiResource('cars', CarController::class);
    
});