<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function onFileUpload(Request $request){
    
    $result= $request->file('FileKey')->store('images');
    
        return $result;
    }
}
