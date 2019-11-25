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
        DB::table('categories')->insert([
            'name' => 'Tuổi Học Trò',
        ]);
        DB::table('categories')->insert([
            'name' => 'Truyền Ngắn',
        ]);
        DB::table('categories')->insert([
            'name' => 'Tiểu Thuyết',
        ]);
        DB::table('categories')->insert([
            'name' => 'Cổ Tích',
        ]);
        DB::table('categories')->insert([
            'name' => 'Truyện Cười',
        ]);
        DB::table('categories')->insert([
            'name' => 'Kinh Dị',
        ]);
        DB::table('categories')->insert([
            'name' => 'Tùy Bút',
        ]);
        DB::table('categories')->insert([
            'name' => 'Ngôn Tình',
        ]);
        DB::table('categories')->insert([
            'name' => 'Trinh Thám',
        ]);
        DB::table('categories')->insert([
            'name' => 'Khoa học - Kỹ thuật',
        ]);
    }
}
