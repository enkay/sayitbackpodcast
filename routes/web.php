<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfilesController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

// applications
Route::view('apply', 'apply')->name('apply');
Route::get('verify', [EmailVerificationController::class, 'verify'])->name('verify');

// auth
Route::view('login', 'login')->name('login');
Route::get('login/authorize', [LoginController::class, 'authorize_login'])->name('login.authorize');
Route::get('logout', [LogoutController::class, 'logout'])->name('logout');

// start
Route::view('start', 'start')->name('start');
Route::view('equipment', 'equipment')->name('equipment');

// profiles
Route::get('profiles/{uuid}', [ProfilesController::class, 'show'])->name('profiles.show');

// app
Route::middleware('auth')->group(function () {
	Route::get('app', [AppController::class, 'index'])->name('app.index');
	Route::view('welcome', 'onboard')->name('onboard');
	Route::view('welcome/photo', 'onboard-photo')->name('onboard.photo');
	Route::view('welcome/thanks', 'onboard-thanks')->name('onboard.thanks');
});

// nova auth
Route::redirect('admin/login', '/login')->name('nova.logout');
Route::redirect('admin/logout', '/logout')->name('nova.logout');

// affiliates
Route::get('a/{name}', function($name) {
	return redirect()->route('apply', ['r' => urlencode($name)]);
});
