<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Models\Book;




class DownloadFileController extends Controller

{

    public static function downloadFile(Request $request)
{
try {
$s3Disk = Storage::disk('s3');  //object for initializing s3 disk
           $validator = Validator::make($request->all(), [
               'media_id' => 'required'        //validator to require media id for downloading file
           ]);
           if ($validator->fails()) {
return Redirect::back()->withErrors(['msg', $validator->errors()]);
], __('constants.BAD_REQUEST'));
           }                        	 // if media id is not available then validator gives error message
          
          
           $data = MediaLibrary::where([
               'id' => $request->media_id
           ])->first();                //get data from media library table according to media id from MediaLibrary modal
          
          
           $media_name = explode("/", $data->media_path);      //explode media_path for media name
           $data->media_name = $media_name[2];                 //assign name to $data object which is the 3rd element of array
           $media_path = $s3Disk->temporaryUrl($data->media_path, now()->addMinutes(30));          //make a temporaryUrl
          
           $data->media_path = $media_path;        //assign that temporaryUrl in media path
           $media_links = array(
               'media_path' => $data->media_path,
               'media_name' => $data->media_name,
               'file_type' => $data->file_type
           );                               	    // make a array for path,name and file type
          
            
            //add headers for downloading file
           header("Cache-Control: public");
           header("Content-Description: File Transfer");
           header("Content-Disposition: attachment; filename=" . $media_links['media_name']);              
           header("Content-Type: " . $media_links['file_type']);

          
           return readfile($media_path);           //to read file which is downloaded from headers
       } catch (\Exception $e) {
return Redirect::back()->withErrors(['msg', 'Something went wrong. Kindly try after sometime.']);
             ], __('constants.INTERNAL_SERVER_ERROR'));
       }
   }
}
