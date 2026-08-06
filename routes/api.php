<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\VehicleController;
use App\Http\Controllers\Api\ServiceRequestController;
use App\Http\Controllers\Api\MechanicController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\BookingController;

Route::get('/test', function () {
    return response()->json([
        'status' => true,
        'message' => 'Vehicle Service Management API is Working!',
    ]);
});

Route::apiResource('customers', CustomerController::class);
Route::apiResource('vehicles', VehicleController::class);
Route::apiResource('service-requests', ServiceRequestController::class);
Route::apiResource('mechanics', MechanicController::class);
Route::apiResource('services', ServiceController::class);
Route::apiResource('bookings', BookingController::class);