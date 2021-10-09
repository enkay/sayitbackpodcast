<?php

use App\Http\Controllers\Api\ApplicationsController;
use Illuminate\Support\Facades\Route;

Route::post('apply', [ApplicationsController::class, 'apply']);

// app
Route::middleware('auth:sanctum')->group(function () {
	Route::post('onboard', [ApplicationsController::class, 'onboard']);
});
