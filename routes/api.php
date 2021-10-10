<?php

use App\Http\Controllers\Api\ApplicationsController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::post('apply', [ApplicationsController::class, 'apply']);

// auth
Route::post('login', [LoginController::class, 'login']);

// app
Route::middleware('auth:sanctum')->group(function () {
	Route::post('onboard', [ApplicationsController::class, 'onboard']);
	Route::post('onboard/photo', [ApplicationsController::class, 'upload_photo']);
});
