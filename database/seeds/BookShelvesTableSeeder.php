<?php

use Illuminate\Database\Seeder;
use App\Models\BookShelf;

class BookShelvesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $bs1 = new BookShelf();
        $bs1->address('Tầng 1 - Hàng 1');
        $bs1->save();

        $bs2 = new BookShelf();
        $bs2->address('Tầng 1 - Hàng 2');
        $bs2->save();

        $bs3 = new BookShelf();
        $bs3->address('Tầng 1 - Hàng 3');
        $bs3->save();

        $bs4 = new BookShelf();
        $bs4->address('Tầng 1 - Hàng 4');
        $bs4->save();

        $bs5 = new BookShelf();
        $bs5->address('Tầng 1 - Hàng 5');
        $bs5->save();

        $bs6 = new BookShelf();
        $bs6->address('Tầng 2 - Hàng 5');
        $bs6->save();

        $bs7 = new BookShelf();
        $bs7->address('Tầng 2 - Hàng 2');
        $bs7->save();
    }
}
