<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuzukiController extends Controller
{
    // Menampilkan halaman Home
    public function home()
    {
        return view('pages.home');
    }

    // Menampilkan halaman About Us
    public function about()
    {
        return view('pages.about');
    }

    // Menampilkan halaman Tipe Mobil
    public function tipe()
    {
        return view('pages.tipe');
    }
}