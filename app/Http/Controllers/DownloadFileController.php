<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;


class DownloadFileController extends Controller

{

    public function index()

    {

        $filePath = public_path("dummy.pdf");

        $headers = ['Content-Type: application/pdf'];

        $fileName = time() . '.pdf';


        return response()->download($filePath, $fileName, $headers);
    }
}
