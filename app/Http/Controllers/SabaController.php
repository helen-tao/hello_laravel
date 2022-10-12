<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SabaController extends Controller
{
    function make ()
    {
        $info = 'my sunshine';
        echo $info;
        $infoes=config('saba_info');
        foreach ($infoes as $key => $value) {
            $info = array();
            $info['file_name'] = $key;
            //dd($value);
            $content=view('saba.default',$value);
            //$info['content'] = view('saba.default',$value)->render(): string;
            echo $content;
        };
    }
}
