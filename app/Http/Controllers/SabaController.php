<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SabaController extends Controller
{
    function make ()
    {
        $info = 'my sunshine';
        return view('saba.default', $info);
    }
}
