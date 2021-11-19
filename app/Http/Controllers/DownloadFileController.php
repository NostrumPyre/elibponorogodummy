<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Models\Image;




class DownloadFileController extends Controller

{

    public function index(Request $request)
    {
        $id = 1;
        $attachment = Image::find($id);

        $headers = [

            'Content-Type'        => 'application/jpeg',

            'Content-Disposition' => 'attachment; filename="' . $attachment->name . '"',

        ];

        return \Response::make(Storage::disk('s3')->get($attachment->url), 200, $headers);
    }
}
