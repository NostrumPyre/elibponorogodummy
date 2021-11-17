<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function viewLandingPage()
    {
        return view('community.main');
    }

    public function viewDetail()
    {
        return view('community.details');
    }
}
