<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuzukiController;

Route::get('/', [SuzukiController::class, 'home'])->name('home');
Route::get('/about-us', [SuzukiController::class, 'about'])->name('about');
Route::get('/tipe-mobil', [SuzukiController::class, 'tipe'])->name('tipe');