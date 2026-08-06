<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\VehicleController;
use App\Http\Controllers\Api\ServiceRequestController;
use App\Http\Controllers\Api\MechanicController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\BookingController;
use App\Http\Controllers\Api\AuthController;

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
// Authentication
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/profile', [AuthController::class, 'profile']);

});