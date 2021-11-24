<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageBookmarkController extends Controller
{
    public function viewBookmark()
    {
        return view('community.dashboard');
    }
}
