<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Auth;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'api'], function ($router) {
    // Profile
    Route::patch('change/profile/module/{module}', [ProfileController::class, 'changeProfileModule'])->middleware(Auth::class);
    Route::patch('change/profile/image', [ProfileController::class, 'changeProfileImage'])->middleware(Auth::class);
    Route::patch('change/profile/info', [ProfileController::class, 'changeProfileInfo'])->middleware(Auth::class);

});