<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('flexible', 'flexible');
Route::view('settings', 'settings');
Route::view('cardinfo', 'cardinfo');
Route::view('dates', 'dates');
Route::view('months', 'months');
Route::view('weeks', 'weeks');
Route::view('days', 'days');
Route::view('age', 'age');


Route::resource('korisnik', KorisnikController::class);
// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

require __DIR__.'/auth.php';
