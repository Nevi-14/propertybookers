<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class MakeRepository extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository 
                            {name : Name of the repository with suffix as Repository. ex: LeadRepository } 
                            {model? : Name of the model with full path after the Models folder. ex: Leads/Lead }';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Repository';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        
    }

     function template(){
        $repo_name = $this->argument('name');
        $model_array = explode("/", $this->argument('model'));
        // dd(end($model_array));
        $path = '';
        for ($i=0; $i < count($model_array)-1; $i++) { 
            $path .= $model_array[$i].'\\';
        }
        // dd($path);
        if(count($model_array) > 0){
            $model_name = end($model_array);
        }else{
            $model_name = 'Model';
        }
        
$template = 
"<?php

namespace App\Repositories;

use App\Models\\".$path.$model_name.";

class ".$repo_name."
{
    /**
     * @var ".strtolower($model_name)."
     */
    protected $".strtolower($model_name).";

    /**
     * @".$repo_name." Constructory
     */
    public function __construct(".$model_name." $".strtolower($model_name).")
    {
        $"."this->".strtolower($model_name)." = $".strtolower($model_name).";
    }
}

?>";

        return $template;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $directory = 'App/Repositories';
        if ( !is_dir( $directory ) &&!is_writable($directory) ) {
            mkdir( $directory, 0755);       
        } 

        $repo_name = $this->argument('name');
        $model_name = ($this->argument('model')) ? $this->argument('model') : 'Model';
      
        if($this->argument('model') == null){
            dd('Model is required!'); 
        }


        $file_name = $directory.'/'.$repo_name.'.php';
        if(!file_exists($file_name)){
            touch($file_name);
            $file = fopen($file_name,"w");
            echo fwrite($file, $this->template());
            fclose($file);
            dd($file_name. ' Repository created successfully!');
        }else{
            dd('Repository with the same name already exists.');
        }
    }
}
