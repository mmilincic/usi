<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('flexible', 'flexible');
Route::view('settings', 'settings');
Route::view('cardinfo', 'cardinfo');
Route::view('dates', 'dates');
Route::view('/', 'home');
Route::view('/', 'home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
