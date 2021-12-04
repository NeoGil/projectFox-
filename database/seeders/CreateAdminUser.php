<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateAdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'firstname'=>'admin',
            'email'=>'admin@lol.com',
            'password'=>bcrypt('admin'),
            'status' => 1
        ]);
    }
}
