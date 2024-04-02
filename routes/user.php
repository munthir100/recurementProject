<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\OfficeController;
use App\Http\Controllers\User\WorkerController;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\CallCenterController;
use App\Http\Controllers\User\Dashboard\MainController;

Route::middleware('guest')->group(function () {
    Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login.submit');
});
Route::middleware('auth')->group(function () {
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('', [MainController::class, 'dashboard'])->name('index');
        Route::resource('offices', OfficeController::class);
        Route::resource('workers', WorkerController::class);
        Route::resource('callCenters', CallCenterController::class);
    });
});
