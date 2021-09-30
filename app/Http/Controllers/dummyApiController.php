<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyApiController extends Controller
{
    function getData(){
        // Laravel already converts array api data to json
       return [
            'name' => 'Dexter',
            'email' => 'dex@email.com',
            'username' => 'dexneutron',
        ];

    }
}
