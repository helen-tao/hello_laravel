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

        $info_array=config('saba_info_1115');

        $image_links=$info_array['img_link'];
        $page_info=$info_array['page_info'];
        $button_info=$info_array['button_info'];


        $page_count=count($page_info[0]);
        $banner_arr=array();
        for($i=0,$m=0;$i<$page_count;$i++){
            if($page_info[0][$i]){
                $banner_arr[$page_info[0][$i]][]=array(
                    "page_id"=>$page_info[2][$i],
                    "page_catagory"=>$page_info[0][$i],
                    "page_name"=>$page_info[0][$i]."_".$page_info[3][$i],
                    "page_title"=>$page_info[3][$i],
                    "page_link"=>$page_info[1][$i],
                );
                $m=$i;
            }else{
                $banner_arr[$page_info[0][$m]][]=array(
                    "page_id"=>$page_info[2][$i],
                    "page_catagory"=>$page_info[0][$m],
                    "page_name"=>$page_info[0][$m]."_".$page_info[3][$i],
                    "page_title"=>$page_info[3][$i],
                    "page_link"=>$page_info[1][$i],
                );
            }
        }
        //dd($banner_arr);

        $button_count=count($button_info);
        $page_count=count($button_info[0]);
        $button_arr=array();

        for($j=3;$j<$page_count;$j++){
            $button_arr[$button_info[0][$j]]=array(
                'Orientation'=>array(),
                'Week 1 Training'=>array(),
                'Month 1 Training'=>array(),
                'Month 3 Training'=>array(),
                'Month 6 Training'=>array(),
                'Task Related'=>array(),
            );

            for($i=1;$i<$button_count;$i++){
                if($button_info[$i][$j]=='✓'){
                    $button_arr[$button_info[0][$j]][$button_info[$i][1]][]=array(
                        "button_name"=>$button_info[$i][0],
                        "button_link"=>$button_info[$i][2]
                    );
                }
            }
        }
        //dd($button_arr[1]);

        foreach($banner_arr as $banner_name => $banner_value){
            //print_r($banner_value);exit;
            for($n=0;$n<count($banner_value);$n++){
                $page_value_index=$n;
                $button_value=$button_arr[$banner_value[$n]['page_id']];

                //print_r($banner_value);
                //print_r($image_links);
                //print_r($button_value);
                //print_r($page_value_index);

                $content=view('saba.default2',compact('banner_value','image_links','button_value','page_value_index'));
                $file_name=$banner_value[$n]['page_id']."_".$banner_value[$n]['page_name'].".html";
                //echo $banner_name;exit;
                if(Storage::put("test/".$banner_name."/".$file_name, $content)){
                    $this->info( $file_name." file is suc<p>");
                }else{
                    $this->info( $file_name." file is fail<p>");
                }
                //exit;
            }

        }
        //dd($final_info);
    }
}
