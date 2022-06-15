<?php

namespace App\Http\Controllers;

use App\Models\SMTP;
use App\Models\User;
use App\Helpers\CRMHelper;
use App\Helpers\StorageLink;
use Illuminate\Http\Request;
use App\Services\InstallService;
use Illuminate\Support\Facades\Artisan;

class InstallController extends Controller
{
    private function getPermission($folder)
    {
        return substr(sprintf('%o', fileperms(base_path($folder))), -4);
    }


    public function install_steps(Request $request){
        $app_url = $request->app_url;
       
        $bootstrap_permission = $this->getPermission('bootstrap/cache');
        $stg_app_permission = $this->getPermission('storage/app');
        $stg_framework_permission = $this->getPermission('storage/framework');
        $stg_logs_permission = $this->getPermission('storage/logs');
        return view('installation.steps',compact([
            'bootstrap_permission',
            'stg_app_permission',
            'stg_framework_permission',
            'stg_logs_permission',
            'app_url'
        ]));
    }

    /**
     * @route API
     * @return JSON
     * @method POST
     */
    public function save_install_steps(Request $request){
        // return response()->json([
        //     'message'=>'ok'
        // ]);
        // Verify Domain existing by calling the 3rd party API

        // use --show to get the key instead of command comment
        Artisan::call('key:generate --show');
        $app_key = trim(Artisan::output());
       
        // First clear the file!
        file_put_contents(base_path(".env"), "");
        $contents = "APP_NAME='".$request->app_name."'
APP_DEBUG=".$request->app_debug."
APP_ENV=".$request->app_env."
APP_KEY=".$app_key."
APP_LOG_LEVEL=debug
APP_URL=".$request->app_url."

DB_CONNECTION=".$request->db_connection."
DB_HOST=".$request->db_host."
DB_PORT=".$request->db_port."
DB_DATABASE=".$request->db_database."
DB_USERNAME=".$request->db_username."
DB_PASSWORD=".$request->db_password."

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=database

REDIS_HOST=localhost
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=".$request->mail_driver."
MAIL_HOST=".$request->mail_host."
MAIL_PORT=".$request->mail_port."
MAIL_USERNAME=".$request->mail_username."
MAIL_PASSWORD=".$request->mail_password."
MAIL_ENCRYPTION=".$request->mail_encryption."

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
        ";
        
        //Save our content to the file.
        file_put_contents(base_path(".env"), $contents);
        $artisan_op = [];
        Artisan::call('config:cache');
        array_push($artisan_op, 'Cache created successfully! \n');
        Artisan::call('db:wipe', [ '--force' => true ]);
        array_push($artisan_op, Artisan::output(), [ '--force' => true ]);
        Artisan::call('migrate:fresh', [ '--force' => true ]);
        array_push($artisan_op, Artisan::output(), [ '--force' => true ]);
        Artisan::call('db:seed', [ '--force' => true ]);
        array_push($artisan_op, 'DB:SEED Success, Default data added successfully! \n');
        Artisan::call('initial:run');
        array_push($artisan_op, 'Initial Run executed!');

        // Store SMTP details in the database
        SMTP::create([
            'mail_driver'=>$request->mail_driver,
            'mail_host'=>$request->mail_host,
            'mail_port'=>$request->mail_port,
            'mail_username'=>$request->mail_username,
            'mail_password'=>$request->mail_password,
            'mail_encryption'=>$request->mail_encryption,
        ]);

         response()->json([
            'code'=>200,
            'message'=>'success',
            'contents' => $contents,
            'artisan_op' => $artisan_op
        ]);

        return view('installation.final', compact('contents','artisan_op'));
    }

    // Final third step API
    public function save_install_final(Request $request){
        // return response()->json([
        //     'message'=>'ok'
        // ]);
        // First clear the file!
        file_put_contents(base_path(".env"), "");
        //Save our content to the file.
        file_put_contents(base_path(".env"), $request->env);
        $artisan_op = [];
        Artisan::call('config:cache');
        array_push($artisan_op, 'Cache created successfully!');

    //    resolve(StorageLink::class)->link();

        array_push($artisan_op, 'Storage link created successfully!');
   
        User::create([
            'name'=>'Admin',
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'role_id'=>1
        ]);
        array_push($artisan_op, Artisan::output());
        
        // INSTALLED file create and put some content in it.
        $installed = 'DevPremier CRM installed at '.now().' Do not delete this file, it prevents the public users to run the installer again!'; 
        file_put_contents(STORAGE_PATH("INSTALLED"), $installed);
         return redirect(url('/'));
        return response()->json([
            'code'=>200,
            'message'=>'success',
            'artisan_op'=>$artisan_op
        ]);
    }

}
