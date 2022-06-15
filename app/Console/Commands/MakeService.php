<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class MakeService extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service 
                            {name : Name of the service without suffix as Service. ex: if you need LeadService, then write Lead only } 
                            {model? : Name of the model with full path after the Models folder. ex: Leads/Lead }';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Service';

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
        $service_name = $this->argument('name');
        $model_array = explode("/", $this->argument('model'));
        $path = '';
        for ($i=0; $i < count($model_array)-1; $i++) { 
            $path .= $model_array[$i].'\\';
        }
        if(count($model_array) > 0 && end($model_array) != ''){
            $model_name = end($model_array);
        }else{
            $model_name = 'Model';
        }
$template = 
"<?php
namespace App\Services;

use App\Models\\".$path.$model_name.";
use App\Repositories\\".$service_name."Repository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class ".$service_name."Service
{
    /**
     * @var $".strtolower($service_name)."Service
     */
    protected $".strtolower($service_name)."Service;

    /**
     * ".$service_name."Service constructor.
     *
     * @param ".$service_name."Repository $".strtolower($service_name)."Repository
     */
    public function __construct(".$service_name."Repository $".strtolower($service_name)."Repository)
    {
        $"."this->".strtolower($service_name)."Repository = $".strtolower($service_name)."Repository;
    }

    /**
     * Delete ".strtolower($model_name)." by id.
     *
     * @param $"."id
     * @return String
     */
    public function deleteById($"."id".")
    {
        DB::beginTransaction();

        try {
            $".strtolower($model_name)." = $"."this->".strtolower($service_name)."Repository->delete($"."id".");

        } catch (Exception $"."e) {
            DB::rollBack();
            Log::info($"."e->getMessage());

            throw new InvalidArgumentException('Unable to delete ".strtolower($model_name)." data');
        }

        DB::commit();

        return $".strtolower($model_name).";

    }

    /**
     * Get all ".strtolower($model_name).".
     *
     * @return String
     */
    public function getAll()
    {
        return $"."this->".strtolower($service_name)."Repository->getAll();
    }

    /**
     * Get ".strtolower($model_name)." by id.
     *
     * @param $"."id
     * @return String
     */
    public function getById($"."id)
    {
        return $"."this->".strtolower($service_name)."Repository->getById($"."id);
    }

    /**
     * Update ".strtolower($model_name)." data
     * Store to DB if there are no errors.
     *
     * @param array $"."data
     * @return String
     */
    public function update".($model_name)."($"."data, $"."id)
    {
        $"."validator = Validator::make($"."data, [
            'title' => 'bail|min:2',
            'description' => 'bail|max:255'
        ]);

        if ($"."validator->fails()) {
            throw new InvalidArgumentException($"."validator->errors()->first());
        }

        DB::beginTransaction();

        try {
            $".strtolower($model_name)." = $"."this->".strtolower($service_name)."Repository->update($"."data, $"."id);

        } catch (Exception $"."e) {
            DB::rollBack();
            Log::info($"."e->getMessage());

            throw new InvalidArgumentException('Unable to update ".strtolower($model_name)." data');
        }

        DB::commit();

        return $".strtolower($model_name).";

    }

    /**
     * Validate ".strtolower($model_name)." data.
     * Store to DB if there are no errors.
     *
     * @param array $"."data
     * @return String
     */
    public function save".($model_name)."Data($"."data)
    {
        $"."validator = Validator::make($"."data, [
            'title' => 'required',
            'description' => 'required'
        ]);

        if ($"."validator->fails()) {
            throw new InvalidArgumentException($"."validator->errors()->first());
        }

        $"."result = $"."this->".strtolower($service_name)."Repository->save($"."data);

        return $"."result;
    }

}
?>
";

        return $template;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $directory = 'App/Services';
        if ( !is_dir( $directory ) &&!is_writable($directory) ) {
            mkdir( $directory, 0755);       
        } 

        $repo_name = $this->argument('name');
        $model_name = ($this->argument('model')) ? $this->argument('model') : 'Model';
      

        $file_name = $directory.'/'.$repo_name.'Service.php';
        if(!file_exists($file_name)){
            touch($file_name);
            $file = fopen($file_name,"w");
            echo fwrite($file, $this->template());
            fclose($file);
            dd($file_name. ' service created successfully!');
        }else{
            dd('Service with the same name already exists.');
        }
    }
}
