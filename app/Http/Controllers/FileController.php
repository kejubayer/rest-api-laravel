<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function countryList()
    {
        return response()->download(public_path('images/me.jpg'),'Photo');
    }

    public function countrySave(Request $request)
    {
        $filename = "user_image.jpg";
        $path=$request->file('photo')->move(public_path("/"),$filename);
        $photoURL=url('/'.$filename);
        return response()->json(['url'=>$photoURL],200);
    }
}
