<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BController extends Controller
{
    public function viewLandingPage()
    {
        return view('community.dashboard');
    }
}
