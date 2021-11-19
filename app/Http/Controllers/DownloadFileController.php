<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Models\Book;




class DownloadFileController extends Controller

{

    public function index(Request $request)
    {
        $uuid = 1;
        $attachment = Book::find($uuid);

        $headers = [

            'Content-Type'        => 'application/pdf',

            'Content-Disposition' => 'attachment; filename="' . $attachment->name . '"',

        ];

        return \Response::make(Storage::disk('s3')->get($attachment->url), 200, $headers);
    }
}
