<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Auth;
use Illuminate\Support\Facades\Route;


Route::middleware(['api', Auth::class])
    ->prefix('core')
    ->name('core.')
    ->controller(ProfileController::class)
    ->group(function () {
        Route::patch('change/profile/module/{module}', 'changeProfileModule')->name('change-module');
        Route::patch('change/profile/image', 'changeProfileImage')->name('change-image');
        Route::patch('change/profile/info', 'changeProfileInfo')->name('change-info');
    });