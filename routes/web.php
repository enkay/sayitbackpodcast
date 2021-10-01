<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('start', 'start')->name('start');
Route::view('equipment', 'equipment')->name('equipment');
