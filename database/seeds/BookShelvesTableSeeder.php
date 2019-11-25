<?php

use Illuminate\Database\Seeder;

class BookShelvesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_shelves')->insert([
            'address' => 'Hàng 1 - Tầng 1'
        ]);
        DB::table('book_shelves')->insert([
            'address' => 'Hàng 1 - Tầng 2'
        ]);
        DB::table('book_shelves')->insert([
            'address' => 'Hàng 1 - Tầng 3'
        ]);
        DB::table('book_shelves')->insert([
            'address' => 'Hàng 1 - Tầng 4'
        ]);
        DB::table('book_shelves')->insert([
            'address' => 'Hàng 1 - Tầng 5'
        ]);
        DB::table('book_shelves')->insert([
            'address' => 'Hàng 2 - Tầng 1'
        ]);
        DB::table('book_shelves')->insert([
            'address' => 'Hàng 2 - Tầng 2'
        ]);
        DB::table('book_shelves')->insert([
            'address' => 'Hàng 2 - Tầng 3'
        ]);
        DB::table('book_shelves')->insert([
            'address' => 'Hàng 2 - Tầng 4'
        ]);
        DB::table('book_shelves')->insert([
            'address' => 'Hàng 2 - Tầng 5'
        ]);
    }
}
