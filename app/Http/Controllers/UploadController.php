<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageModel;
use Image;


class UploadController extends Controller
{
    public function index(){

        return view('upload');
    }
    public function store(Request $request){

        if ($request->file('picture'))
        {
             $originalImage      = $request->file('picture');
                 $imageName          = $this->uploadImage($originalImage);
          //  $applicant->picture = $imageName;
         }
        
    }
    private function uploadImage($originalImage)
{
        $profileImage    = Image::make($originalImage);

        $tmp             = $originalImage->getClientOriginalName();
        $ext2            = explode(".", $tmp);
        $ext             = end($ext2);
        $imageName       = time().'.'.$ext;
        // local
         $path            = public_path().'/uploads/'; 
        // deployment
        // $path          = base_path().'/../'.'uploads/';
        
        $profileImage->save($path.$imageName);
        return $imageName;
 }


}
