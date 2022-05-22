<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::post('/fileUp', 'UploadController@onFileUpload');
