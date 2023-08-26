<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\MaintenanceController;

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);


Route::prefix('dashboard')->middleware('auth')->group( function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/equipments', [EquipmentController::class, 'index'])->name('equipments');
    Route::get('/maintenance', [MaintenanceController::class, 'index'])->name('maintenance');
});
