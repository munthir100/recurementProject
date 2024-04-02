<?php

use App\Http\Controllers\Account\Auth\LoginController;
use App\Http\Controllers\Account\CallCenter\InquiryRequestController;
use App\Http\Controllers\Account\Office\CvController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\User\OfficeController;
use Illuminate\Support\Facades\Route;


Route::post('changeLocale', [MainController::class, 'changeLocale'])->name('changeLocale');

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('workers', [MainController::class, 'workers'])->name('workers');
Route::get('callCenters', [MainController::class, 'callCenters'])->name('callCenters');
Route::get('/select-call-center', [MainController::class, 'callCenters'])->name('callCenter.select');
Route::get('/request-call-center', [InquiryRequestController::class, 'create'])->name('inquiryRequest.create');
Route::post('request/{worker_id}/{call_center_id}', [MainController::class, 'createInqueryRequest'])->name('inquiryRequest.store');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('account.login');
    Route::post('/login', [LoginController::class, 'login'])->name('account.login.submit');
});
Route::middleware('auth:account')->name('account.')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::name('callCenter.')->group(function(){
        Route::resource('inquiryRequests', InquiryRequestController::class)->except(['edit', 'update']);
    });
    Route::name('office.')->group(function(){
        Route::resource('cv', CvController::class)->only(['index', 'destroy']);
    });
});

Route::prefix('user')->name('user.')->group(function () {
    require base_path('routes/user.php');
});