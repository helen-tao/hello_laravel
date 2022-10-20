<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class BatchPages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'saba:batch-pages';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Saba help batch pages';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info("start to make page...");

        $info_array=config('saba_info');

        $image_links=$info_array['img_link'];
        $page_color=$info_array['page_color'];
        $content_info=$info_array['content_info'];

        //get pages name
        $page_title=array();
        $page_title=array_keys(array_slice($content_info[0],2));

        //make every page
        foreach($page_title as $page_value){

            $page_array=array(
                'Orientation'=>array(),
                'Month 1'=>array(),
                'Month 3'=>array(),
                'Month 6'=>array(),
                'Task Based'=>array(),
            );
            foreach($content_info as $content_value){
                if($content_value[$page_value]=='ü'){

                    array_push($page_array[$content_value['Timeframe']],$content_value['Course name']);
                    //print_r($content_value['Timeframe']);
                }

            }

            $final_info=array();
            $final_info=array(
                'page_title'=>$page_value,
                'contents'=>$page_array,
            );

            // print_r($final_info);
            // print_r($page_color);
            // print_r($image_links);

            $content=view('saba.default',compact('final_info','image_links','page_color'));
            $file_name='Disability_Service_'.$page_value.'.html';
            //echo $content;exit;
            if(Storage::put('test/'.$file_name, $content)){
                $this->info( $file_name." file is suc<p>");
            }else{
                $this->info( $file_name." file is fail<p>");
            }


        }
        //dd($final_info);


        // foreach ($info_array as $key => $value) {
        //     $info = array();
        //     $info['file_name'] = $key.".html";
        //     //dd(storage_path());
        //     $content=view('saba.default',$value);
        //     //echo $content;
        //     if(Storage::put("test/".$info['file_name'], $content)){
        //         $this->info( $info['file_name']." file is suc<p>");
        //     }else{
        //         $this->info( $info['file_name']." file is fail<p>");
        //     }
        //     //echo $content;
        // };

        // $this->info("all suc");

    }
}
