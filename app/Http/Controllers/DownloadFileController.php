<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Models\Book;




class DownloadFileController extends Controller

{

    public function downloadFile(Request $request)
    {
        $this->validate($request, ['book' => 'required|mimes:pdf']);
        if ($request->hasfile('book')) {
            $file = $request->file('book');
            $name = time() . $file->getClientOriginalName();
            $filePath = 'books/' . $name;
            Storage::disk('s3')->put($filePath, file_get_contents($file));
            return back()->with('success', 'Book Uploaded successfully');

        return \Response::make(Storage::disk('s3')->get($attachment->url), 200, $headers);
    }
}
