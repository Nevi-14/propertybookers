<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class Statuses extends Seeder
{
    public function run()
    {
        DB::table('statuses')->insert(
            
            [
                [
                    'name' =>'New'
                 
                ],
                [
                    'name' =>'Assigned'
                 
                ],
                [
                    'name' =>'In Progress'
                 
                ],
                [
                    'name' =>'Follow up'
                 
                ],
                [
                    'name' =>'Waiting on Task'
                 
                ],
                [
                    'name' =>'Closed'
                 
                ]
            ]
            
            );
        
            foreach(DB::table("statuses")->get() as $status) {
                DB::table("statuses")
                    ->where("id", $status->id)
                    ->update(array("created_at"=>Carbon::now()));
            }

    }
}
