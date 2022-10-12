<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SabaController extends Controller
{
    function make ()
    {
        $info_array=config('saba_info');
        foreach ($info_array as $key => $value) {
            $info = array();
            $info['file_name'] = $key.".html";
            //dd(storage_path());
            $content=view('saba.default',$value);
            if(Storage::put("test/".$info['file_name'], $content)){
                echo $info['file_name']." file is suc<p>";
            }else{
                echo $info['file_name']." file is fail<p>";
            }
            //echo $content;
        };
    }
}
