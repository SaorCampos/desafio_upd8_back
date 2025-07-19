<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('api.jwt')->group(function () {

    Route::prefix('auth')->group(function () {
        Route::post('login', [AuthController::class, 'login'])->withoutMiddleware(['api.jwt'])->name('auth.login');
        Route::post('logout', [AuthController::class, 'logout'])->name('auth.logout');
    });

    Route::prefix('cities')->group(function () {
        Route::post('/', [CityController::class, 'listAll'])->name('cities.listAll');
    });
});
