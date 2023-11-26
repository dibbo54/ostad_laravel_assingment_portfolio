<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function AboutSection()
    {
        
        return view('pages.AboutSection');
    }
}
