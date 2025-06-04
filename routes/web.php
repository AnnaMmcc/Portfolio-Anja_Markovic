<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/about', 'about');
Route::get('/projects', \App\Http\Controllers\PortfolioController::class, 'projects');
Route::get('/contact', [\App\Http\Controllers\PortfolioController::class, 'show'])->name('contact.show');
Route::post('/contact-send', [\App\Http\Controllers\PortfolioController::class, 'send'])->name('contact.send');

