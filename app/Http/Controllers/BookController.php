<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function download($uuid)
    {
        $book = Book::where('uuid', $uuid)->firstOrFail();
        $pathToFile = storage_path('app/books/' . $book->cover);
        return response()->download($pathToFile);
    }
}
