<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use App\Models\Note;
use App\Models\User;
use App\Models\Leads\Lead;
use App\Models\Address\Address;
use App\Models\SocialMediaField;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(1)->create([
            'name' => 'Admin',
            'email'=>'admin@devpremier.com',
            'role_id'=>'1'
        ]);

        User::factory()->count(1)->create([
            'name' => 'user',
            'email'=>'user@devpremier.com',
            'role_id'=>'2'
        ]);

        User::factory()->count(1)->create([
            'name' => 'salesperson',
            'email'=>'salesperson@devpremier.com',
            'role_id'=>'3'
        ]);

        $leads = Lead::factory()->count(2000)->create();    
        foreach ($leads as $lead) {
            Note::factory()->count(1)->create([
                'lead_id'=>$lead->id
            ]);
            SocialMediaField::factory()->count(1)->create([
                'lead_id'=>$lead->id
            ]);    
            Address::factory()->count(1)->create([
                'lead_id'=>$lead->id
            ]);
        }
    }
}
