<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Long',
            'email' => 'thanhlong98@gmail.com',
            'username' => 'thanhlong98',
            'password' => bcrypt('123123123')
        ]);
        DB::table('admins')->insert([
            'name' => 'Hoang',
            'email' => 'thanhhoang98@gmail.com',
            'username' => 'thanhhoang98',
            'password' => bcrypt('123123123')
        ]);
    }
}
