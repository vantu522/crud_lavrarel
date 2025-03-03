<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route công khai 
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Route được bảo vệ (cần token)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);
    
    // Thêm các route khác cần xác thực ở đây...
});