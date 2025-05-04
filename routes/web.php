<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/',          [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard', [PageController::class, 'dashboard']);
Route::get('/profile',  [PageController::class, 'profile'])->name('profile');
Route::post('/profile', [PageController::class, 'updateProfile'])->name('profile.update');
Route::get('/settings', [PageController::class, 'settings'])->name('settings');
Route::post('/settings',[PageController::class, 'updateSettings'])->name('settings.update');
