<?php

use App\Http\Controllers\EmailVerificationController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

// applications
Route::view('apply', 'apply')->name('apply');
Route::get('verify', [EmailVerificationController::class, 'verify'])->name('verify');

// auth
Route::view('login', 'login')->name('login');

// start
Route::view('start', 'start')->name('start');
Route::view('equipment', 'equipment')->name('equipment');

// app
Route::middleware('auth')->group(function () {
	Route::view('welcome', 'onboard')->name('onboard');
	Route::view('welcome/photo', 'onboard-photo')->name('onboard.photo');
});
