<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_books')->insert([
            'name' => 'Tuổi Học Trò',
        ]);
        DB::table('category_books')->insert([
            'name' => 'Truyền Ngắn',
        ]);
        DB::table('category_books')->insert([
            'name' => 'Tiểu Thuyết',
        ]);
        DB::table('category_books')->insert([
            'name' => 'Cổ Tích',
        ]);
        DB::table('category_books')->insert([
            'name' => 'Truyện Cười',
        ]);
        DB::table('category_books')->insert([
            'name' => 'Kinh Dị',
        ]);
        DB::table('category_books')->insert([
            'name' => 'Tùy Bút',
        ]);
        DB::table('category_books')->insert([
            'name' => 'Ngôn Tình',
        ]);
        DB::table('category_books')->insert([
            'name' => 'Trinh Thám',
        ]);
        DB::table('category_books')->insert([
            'name' => 'Khoa học - Kỹ thuật',
        ]);
    }
}
