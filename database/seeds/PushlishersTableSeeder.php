<?php

use Illuminate\Database\Seeder;

class PushlishersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'name user 5',
            'email' => 'user5@gmail.com',
            'username' => 'user5',
            'password' => bcrypt('123123123')
        ]);
    }
}
