<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\VehicleController;

Route::get('/test', function () {
    return response()->json([
        'status' => true,
        'message' => 'Vehicle Service Management API is Working!',
    ]);
});

Route::apiResource('customers', CustomerController::class);
Route::apiResource('vehicles', VehicleController::class);