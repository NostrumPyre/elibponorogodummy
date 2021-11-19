<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {
        return view('book');
    }
    public function store(Request $request)
    {
        $this->validate($request, ['book' => 'required|book']);
        if ($request->hasfile('book')) {
            $file = $request->file('book');
            $name = time() . $file->getClientOriginalName();
            $filePath = 'books/' . $name;
            Storage::disk('s3')->put($filePath, file_get_contents($file));
            return back()->with('success', 'Book Uploaded successfully');
        }
    }
}
