<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {
        $url = 'https://s3.' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') . '/';
        $books = [];
        $files = Storage::disk('s3')->files('books');
        foreach ($files as $file) {
            $books[] = [
                'name' => str_replace('books/', '', $file),
                'src' => $url . $file
            ];
        }

        return view('welcome', compact('books'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'book' => 'required|book|max:2048'
        ]);

        if ($request->hasFile('book')) {
            $file = $request->file('book');
            $name = time() . $file->getClientOriginalName();
            $filePath = 'books/' . $name;
            Storage::disk('s3')->put($filePath, file_get_contents($file));
        }

        return back()->withSuccess('Book uploaded successfully');
    }

    public function destroy($book)
    {
        Storage::disk('s3')->delete('books/' . $book);

        return back()->withSuccess('Book was deleted successfully');
    }
}
