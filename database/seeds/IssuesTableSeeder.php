<?php

use Illuminate\Database\Seeder;

class IssuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('issues')->insert([
            'user_id' => '1',
            'book_id' => '1',
            'admin_id' => '1',
            'note' => ''
        ]);
        DB::table('issues')->insert([
            'user_id' => '4',
            'book_id' => '4',
            'admin_id' => '2',
            'note' => ''
        ]);
        DB::table('issues')->insert([
            'user_id' => '2',
            'book_id' => '2',
            'admin_id' => '1',
            'note' => ''
        ]);
        DB::table('issues')->insert([
            'user_id' => '3',
            'book_id' => '3',
            'admin_id' => '1',
            'note' => ''
        ]);
        DB::table('issues')->insert([
            'user_id' => '5',
            'book_id' => '5',
            'admin_id' => '2',
            'note' => ''
        ]);
        DB::table('issues')->insert([
            'user_id' => '6',
            'book_id' => '8',
            'admin_id' => '2',
            'note' => ''
        ]);
    }
}
