<?php

namespace App\Http\Controllers\Office;

use App\Models\SMTP;
use Illuminate\Http\Request;
use App\Models\SingleRowData;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class SMTPController extends Controller
{

    public function index()
    {
        $route_active = 'mail_setting';
        $smtp = SMTP::first();
        $cron_status = SingleRowData::where(['field_name'=>'cron_status'])->first();
        return view('crm.office.mail', compact(['route_active', 'smtp','cron_status']));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'mail_host'=>'required',
            'mail_username'=>'required',
            'mail_password'=>'required',
            'mail_port'=>'required',
            'mail_driver'=>'required',
        ]);
        if($validated){
            SMTP::create([
                'mail_encryption'=> $request->mail_encryption, 
                'mail_driver'=> $request->mail_driver, 
                'mail_host'=> $request->mail_host, 
                'mail_username'=>$request->mail_username,
                'mail_password'=>$request->mail_password,
                'mail_port'=>$request->mail_port,
            ]);
            Artisan::call('config:cache');
            $notification = array(
                'message' => __('SMTP added successfully!'),
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }else{
            // if not validated
            return back()->withErrors($validated)->withInput();
        }
    }



    public function update(Request $request, SMTP $smtp)
    {
        $validated = $request->validate([
            'mail_driver'=>'required',
            'mail_host'=>'required',
            'mail_username'=>'required',
            'mail_password'=>'required',
            'mail_port'=>'required'
        ]);
        if($validated){
                $smtp->mail_encryption =  $request->mail_encryption; 
                $smtp->mail_driver =  $request->mail_driver; 
                $smtp->mail_host =  $request->mail_host; 
                $smtp->mail_username = $request->mail_username;
                $smtp->mail_password = $request->mail_password;
                $smtp->mail_port = $request->mail_port;
                $smtp->save();
                $this->changeEnv([
                    'MAIL_ENCRYPTION'=>$request->mail_encryption,
                    'MAIL_DRIVER'   => $request->mail_driver,
                    'MAIL_HOST'   => $request->mail_host,
                    'MAIL_USERNAME'   => $request->mail_username,
                    'MAIL_PASSWORD'   => $request->mail_password,
                    'MAIL_PORT'   => $request->mail_port,
                ]);
            Artisan::call('config:clear');
            Artisan::call('config:cache');
            $notification = array(
                'message' => __('SMTP updated successfully!'),
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }else{
            // if not validated
            return back()->withErrors($validated)->withInput();
        }
    }

    public function setCronStatus(Request $request){
        $cron_status = SingleRowData::where(['field_name'=>'cron_status'])->first();
        $cron_status->field_value = ($request->cron_status == 'yes') ? '1' : 0;
        if ($cron_status->save()) {
            if ($request->cron_status == 'yes') {
                $notification = array(
                    'message' => __('CronJob enabled successfully!'),
                    'alert-type' => 'success'
                );
            } else {
                $notification = array(
                    'message' => __('CronJob disabled successfully!'),
                    'alert-type' => 'success'
                );
            }
            return back()->with($notification);
        } else {
            $notification = array(
                'message' => __('Please try again!'),
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
    }

    /**
     * @changeEnv This function searches the variable in the .env and replaces its value with the given value.
     */
    protected function changeEnv($data = array()){
        if(count($data) > 0){

            // Read .env-file
            $env_content = file_get_contents(base_path() . '/.env');

            // Split string on every " " and write into array
            $env = explode("\n", $env_content);

            // Loop through given data
            foreach((array)$data as $key => $value){

                // Loop through .env-data
                foreach($env as $env_key => $env_value){

                    // Turn the value into an array and stop after the first split
                    // So it's not possible to split e.g. the App-Key by accident
                    $entry = explode("=", $env_value, 2);

                    // Check, if new key fits the actual .env-key
                    if($entry[0] == $key){
                        // If yes, overwrite it with the new one
                        $env[$env_key] = $key . "=" . $value;
                    } else {
                        // If not, keep the old one
                        $env[$env_key] = $env_value;
                    }
                }
            }

            // Turn the array back to an String
            $env = implode("\n", $env);

            // And overwrite the .env with the new data
            file_put_contents(base_path() . '/.env', $env);
            
            return true;
        } else {
            return false;
        }
    }

}
