<?php

use App\Api\Controllers\AuthController;
use App\Api\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::middleware('throttle:api')->group(function () {
    // Auth routes
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);

    // Protected routes
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/user', [AuthController::class, 'user']);
        Route::post('/logout', [AuthController::class, 'logout']);
        
        // Product routes
        Route::apiResource('products', ProductController::class);
    });
});
