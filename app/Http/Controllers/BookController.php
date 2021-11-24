<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{

    public function cover(Request $request)
    {
        $path = Storage::disk('s3')->put('Covers/', $request->file('profile_image'), 'public');
        $user->profile_image = basename($path);
    }
}
