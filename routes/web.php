<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

Route::group(['middleware' => 'Admin'], function () {
    Route::get('/', [HomeController::class, 'index']);
});

// ********* Login *********
Route::get('/login', [AuthController::class, 'loginindex']);
Route::post('/session', [AuthController::class, 'store']);
Route::get('/logoutadmin', [AuthController::class, 'logoutadmin']);
// ********* Login *********


// ********* Register *********
Route::get('/register', [AuthController::class, 'registerindex']);
// ********* Register *********
