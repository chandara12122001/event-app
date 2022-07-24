<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    //
    public function delete($id){
        $image=Image::findOrFail($id);
        if(File::exists(asset($image->image))){
            File::delete(asset($image->image));
        }
        $image->delete();
        return back();
    }
}
