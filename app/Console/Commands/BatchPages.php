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
        $content_info=$info_array['content_info'];

       // dd($content_info);

        $page_info=array();
        $page_title=array();
        $final_info=array();
        $page_title=array_keys(array_slice($content_info[0],2));
        //dd($page_title);
        foreach($page_title as $page_value){
            $final_info[]['page_title']=$page_value;


            foreach($content_info as $content_value){
                if($content_value[$page_value]=='ü'){
                    print_r($content_value);
                }
           // $page_info['page_title']=$value
            }
            exit;



        }
        dd($final_info);


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
