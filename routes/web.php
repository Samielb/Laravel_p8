<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/api/documentation');
});

// API Routes
Route::prefix('api')->group(function () {
    Route::post('/register', [\App\Api\Controllers\AuthController::class, 'register']);
    Route::post('/login', [\App\Api\Controllers\AuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/user', [\App\Api\Controllers\AuthController::class, 'user']);
        Route::post('/logout', [\App\Api\Controllers\AuthController::class, 'logout']);
        
        // Product routes
        Route::apiResource('products', \App\Api\Controllers\ProductController::class);
    });
});

// Documentation route
Route::get('/api/documentation', function () {
    return view('api.documentation');
});
 