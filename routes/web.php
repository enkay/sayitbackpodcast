<?php

use App\Http\Controllers\Api\ApplicationsController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

// applications
Route::view('apply', 'apply')->name('apply');
Route::get('verify', [ApplicationsController::class, 'verify'])->name('verify');
Route::view('onboard', 'onboard')->name('onboard');

// start
Route::view('start', 'start')->name('start');
Route::view('equipment', 'equipment')->name('equipment');
