<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Log;
use Illuminate\Support\Facades\Artisan;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_user')->truncate();
        DB::table('users')->truncate();
        DB::table('roles')->truncate();

        $data = [
            ['name' => 'Pramana Yuda Sayeti', 'username' => 'yudapramana', 'email' => 'pramanayuda772@gmail.com', 'password' => Hash::make('superadmin'), 'current_role_id' => 1, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Super Administrator', 'username' => 'superadmin', 'email' => 'superadmin@pandanview.com', 'password' => Hash::make('superadmin'), 'current_role_id' => 1, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Administrator', 'username' => 'admin', 'email' => 'admin@pandanview.com', 'password' => Hash::make('admin@123'), 'current_role_id' => 2, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Operator', 'username' => 'operator', 'email' => 'operator@pandanview.com', 'password' => Hash::make('operator@123'), 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()]
        ];


        DB::table('users')->insert($data);


        DB::table('roles')->insert([
            ['name' => 'Super Administrator'],
            ['name' => 'Administrator'],
            ['name' => 'Operator'],
        ]);

        DB::table('role_user')->insert([
            ['user_id' => '1', 'role_id' => '1'],
            ['user_id' => '1', 'role_id' => '2'],
            ['user_id' => '1', 'role_id' => '3'],
            ['user_id' => '2', 'role_id' => '1'],
            ['user_id' => '2', 'role_id' => '2'],
            ['user_id' => '2', 'role_id' => '3'],
            ['user_id' => '3', 'role_id' => '3']
        ]);

        Artisan::call('translations:import');


        
    }
}
