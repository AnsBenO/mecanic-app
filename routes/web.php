<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    //managing clients
    Route::get('/clients', [ClientController::class, 'index'])->name('admin.clients.index');
    Route::get('/clients/create', [ClientController::class, 'create'])->name('admin.clients.create');
    Route::post('/clients', [ClientController::class, 'store'])->name('admin.clients.store');

    //managing vehicles
    Route::get('/vehicles', [VehicleController::class, 'index'])->name('admin.vehicles.index');
    Route::get('/vehicles/create', [VehicleController::class, 'create'])->name('admin.vehicles.create');
    Route::post('/vehicles', [VehicleController::class, 'store'])->name('admin.vehicles.store');
});
