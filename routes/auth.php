<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredAdminController;
use Illuminate\Support\Facades\Route;

// Auth
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');
    Route::post('/register', [RegisteredAdminController::class, 'store'])->name('register');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::post('/refresh', [AuthenticatedSessionController::class, 'refresh'])->name('refresh_token');
});
