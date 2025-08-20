<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PortfolioController::class, 'projects']);
Route::view('/about', 'about');
Route::get('/contact', [\App\Http\Controllers\PortfolioController::class, 'show'])->name('contact.show');
Route::post('/contact-send', [\App\Http\Controllers\PortfolioController::class, 'send'])->name('contact.send');

