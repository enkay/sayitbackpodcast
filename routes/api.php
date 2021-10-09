<?php

use App\Http\Controllers\Api\ApplicationsController;
use Illuminate\Support\Facades\Route;

Route::post('apply', [ApplicationsController::class, 'apply']);
