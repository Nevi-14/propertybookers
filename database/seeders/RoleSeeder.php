<?php
namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::factory()->count(1)->create([
            'name'=>'admin',
            'status'=>'active'
        ]);

        Role::factory()->count(1)->create([
            'name'=>'user',
            'status'=>'active',
            'default_role'=>'yes'
        ]);

        Role::factory()->count(1)->create([
            'name'=>'salesperson',
            'status'=>'active',
        ]);

    }
}
