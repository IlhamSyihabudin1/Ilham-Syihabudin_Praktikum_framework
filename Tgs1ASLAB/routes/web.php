<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    $nama = 'Pangundian Siagian';
    $npm = '2310631170038';
    $hobby = 'Membaca buku';
    return view ('home', data: compact('nama', 'npm', 'hobby'));
});

Route::get('/about', [AboutController::class, 'showAbout']);