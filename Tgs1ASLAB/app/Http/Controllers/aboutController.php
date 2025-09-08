<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;        

class AboutController extends Controller
{
    public function showAbout()
    {
        $tb = "173 cm";
        $bb = "62 kg";
        $mf = "APA AJA SIH hehehe";
        return view('about', data: compact('tb', 'bb', 'mf'));
    }
}
