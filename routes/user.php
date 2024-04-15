<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\OfficeController;
use App\Http\Controllers\User\WorkerController;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\BlogController;
use App\Http\Controllers\User\CallCenterController;
use App\Http\Controllers\User\Dashboard\CvController;
use App\Http\Controllers\User\Dashboard\MainController;
use App\Http\Controllers\User\Dashboard\SecurityController;
use App\Http\Controllers\User\Dashboard\SettingsController;

Route::middleware('guest:web')->group(function () {
    Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login.submit');
});
Route::middleware('auth:web')->group(function () {
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('', [MainController::class, 'dashboard'])->name('index');
        Route::resource('cvs', CvController::class)->only('index');
        Route::resource('offices', OfficeController::class);
        Route::resource('workers', WorkerController::class);
        Route::resource('callCenters', CallCenterController::class);
        Route::resource('blogs', BlogController::class);
        Route::put('offices/{office}/password/update', [OfficeController::class,'updatePassword'])->name('offices.update.password');
        Route::put('callCenters/{callCenter}/password/update', [CallCenterController::class,'updatePassword'])->name('callCenters.update.password');


        Route::get('settings', [SettingsController::class, 'showSettings'])->name('settings');
        Route::get('/security', [SecurityController::class, 'showSecurity'])->name('security');
        Route::put('/settings/update', [SettingsController::class, 'updateSettings'])->name('settings.update');
        Route::put('/security/update', [SecurityController::class, 'updateSecurity'])->name('security.update');

    });
});
