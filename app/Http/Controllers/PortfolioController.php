<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function Portfolio()
    {
        return view('pages.PortfolioSection');
    }
}
