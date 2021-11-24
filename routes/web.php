<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DownloadFileController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ManageBookmarkController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('book', [BookController::class, 'index']);
Route::post('store', [BookController::class, 'store']);

Route::get('download', [DownloadFileController::class, 'downloadFile'])->name('download');


Route::get('/', [CommunityController::class, 'viewLandingPage']);
Route::get('/book/1', [CommunityController::class, 'viewDetail'])->name('detail');;

Route::get('/admin', [StaffController::class, 'viewLandingPage']);

Route::get('/project-guidance', function () {
    return view('project-guidance');
});

Route::get('testDB', function () {

    $books = DB::table('book')->get();

    return view('community.details', ['books' => $books]);
});


Route::get('/bookmark', function () {

    $books = DB::table('book')->get();

    return view('community.dasboard', ['books' => $books]);
});
