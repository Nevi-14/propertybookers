<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class Team extends Seeder
{
    public function run()
    {
        DB::table('teams')->insert(
            
            [
                [
                    'name' =>'PB-LG'
                 
                ],
                [
                    'name' =>'PB-SMS'
                 
                ]
            ]
            
            );
        
            foreach(DB::table("teams")->get() as $team) {
                DB::table("teams")
                    ->where("id", $team->id)
                    ->update(array("created_at"=>Carbon::now()));
            }

    }
}
