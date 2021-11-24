<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function viewLandingPage()
    {
        $books = DB::table('book')->get();
        $journals = DB::table('journal')->get();

        return view('community.landingPage', ['books' => $books], ['journals' => $journals]);
    }

    public function viewDetail()
    {
        return view('community.details');
    }
}
