<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/orthopedagogie', [HomeController::class, 'orthopedagogie'])->name('orthopedagogie');
Route::get('/intervention', [HomeController::class, 'intervention'])->name('intervention');
Route::get('/stimulation', [HomeController::class, 'stimulation'])->name('stimulation');
Route::get('/cpe', [HomeController::class, 'cpe'])->name('cpe');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/appointment', [HomeController::class, 'appointment'])->name('appointment');
