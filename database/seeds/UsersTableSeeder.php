<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'name user 1',
            'email' => 'user1@gmail.com',
            'username' => 'user1',
            'password' => bcrypt('123123123')
        ]);
        DB::table('users')->insert([
            'name' => 'name user 2',
            'email' => 'user2@gmail.com',
            'username' => 'user2',
            'password' => bcrypt('123123123')
        ]);
        DB::table('users')->insert([
            'name' => 'name user 3',
            'email' => 'user3@gmail.com',
            'username' => 'user3',
            'password' => bcrypt('123123123')
        ]);
        DB::table('users')->insert([
            'name' => 'name user 4',
            'email' => 'user4@gmail.com',
            'username' => 'user4',
            'password' => bcrypt('123123123')
        ]);
        DB::table('users')->insert([
            'name' => 'name user 5',
            'email' => 'user5@gmail.com',
            'username' => 'user5',
            'password' => bcrypt('123123123')
        ]);
    }
}
