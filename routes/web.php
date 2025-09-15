<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuzukiController;

// Rute untuk Halaman Home (Slide 1)
Route::get('/', [SuzukiController::class, 'home'])->name('home');

// Rute untuk Halaman About Us (Slide 2)
Route::get('/about-us', [SuzukiController::class, 'about'])->name('about');

// Rute untuk Halaman Tipe Mobil (Slide 3)
Route::get('/tipe-mobil', [SuzukiController::class, 'tipe'])->name('tipe');