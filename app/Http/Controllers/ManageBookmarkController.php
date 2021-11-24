<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageBookmarkController extends Controller
{
    public function viewBookmark()
    {
        $books = DB::table('book')->get();


        return view('community.dashboard', ['books' => $books]);
    }
}
