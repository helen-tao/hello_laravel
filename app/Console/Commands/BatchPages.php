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
    protected $signature = 'saba:patch-pages';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Saba help patch pages';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info("start to make page...");

        $info_array=config('saba_info');
        foreach ($info_array as $key => $value) {
            $info = array();
            $info['file_name'] = $key.".html";
            //dd(storage_path());
            $content=view('saba.default',$value);
            //echo $content;
            if(Storage::put("test/".$info['file_name'], $content)){
                $this->info( $info['file_name']." file is suc<p>");
            }else{
                $this->info( $info['file_name']." file is fail<p>");
            }
            //echo $content;
        };

        $this->info("all suc");
    }
}
