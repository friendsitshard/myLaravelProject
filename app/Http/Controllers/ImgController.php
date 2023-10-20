<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfilePictureRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImgController extends Controller
{
    public function uploadImg(ProfilePictureRequest $request){

        $request->validated();

        $image = $request->file('image');
        $image->store('images');

        return [
            'response' => 'urarara'
        ];
    }
}
