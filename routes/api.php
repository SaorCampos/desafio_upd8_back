<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RepresentativeController;
use App\Models\Client;
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

    Route::prefix('clients')->group(function () {
        Route::post('/', [ClientController::class, 'findAllCLients'])->name('clients.listAll');
        Route::post('/create', [ClientController::class, 'createClient'])->name('clients.create');
        Route::put('/update', [ClientController::class, 'updateClient'])->name('clients.update');
        Route::delete('/delete/{id}', [ClientController::class, 'deleteClient'])->name('clients.delete');
        Route::get('/{id}', [ClientController::class, 'findClientById'])->name('clients.find');
        Route::get('/city/{id}', [ClientController::class, 'findClientsByCityId'])->name('clients.findByCityId');
    });

    Route::prefix('representatives')->group(function () {
        Route::post('/', [RepresentativeController::class, 'findAllRepresentatives'])->name('representatives.listAll');
        Route::post('/create', [RepresentativeController::class, 'createRepresentative'])->name('representatives.create');
        Route::put('/update', [RepresentativeController::class, 'updateRepresentative'])->name('representatives.update');
        Route::get('/{id}', [RepresentativeController::class, 'findRepresentativeById'])->name('representatives.find');
        Route::get('/client/{id}', [RepresentativeController::class, 'findRepresentativesByClientId'])->name('representatives.findByClientId');
    });
});
