<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UjikomController;

Route::get('/', [UjikomController::class, 'index'])->name('ujikom.index');
Route::post('/ujikom', [UjikomController::class, 'store'])->name('ujikom.store');
