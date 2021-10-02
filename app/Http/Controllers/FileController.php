<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    //
    public function upload(Request $request){

        $data = $request->file('file')->store('apiDocs');
        return [
            "result" => $data
        ];

    }
}
