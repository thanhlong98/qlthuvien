<?php

use Illuminate\Database\Seeder;
use App\Models\CategoryBook;

class CategoryBookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tl1 = new CategoryBook();
        $tl1->name = 'Tuổi Học Trò';
        $tl1->save();
        
        $tl2 = new CategoryBook();
        $tl2->name = 'Truyện Ngắn';
        $tl2->save();

        $tl3 = new CategoryBook();
        $tl3->name = 'Tiểu Thuyết';
        $tl3->save();

        $tl4 = new CategoryBook();
        $tl4->name = 'Cổ tích';
        $tl4->save();

        $tl5 = new CategoryBook();
        $tl5->name = 'Truyện cười';
        $tl5->save();

        $tl6 = new CategoryBook();
        $tl6->name = 'Kinh dị ';
        $tl6->save();

        $tl7 = new CategoryBook();
        $tl7->name = 'Tùy bút';
        $tl7->save();

        $tl8 = new CategoryBook();
        $tl8->name = 'Ngôn tình';
        $tl8->save();

        $tl8 = new CategoryBook();
        $tl8->name = 'Trinh thám';
        $tl8->save();

        $tl9 = new CategoryBook();
        $tl9->name = 'khoa học - Kĩ thuật';
        $tl9->save();
    }
}
