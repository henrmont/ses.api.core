<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Auth;
use Illuminate\Support\Facades\Route;


Route::middleware(['api', Auth::class])
    ->prefix('core')
    ->name('core.')
    ->controller(ProfileController::class)
    ->group(function () {
        Route::patch('change-module/{module}', 'changeProfileModule')->name('change-module');
        Route::patch('change-image', 'changeProfileImage')->name('change-image');
        Route::patch('change-info', 'changeProfileInfo')->name('change-info');
    });