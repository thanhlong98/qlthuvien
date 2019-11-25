<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin1 = new Admin();
        $admin1->name = 'Long';
        $admin1->email = 'thanhlong98@gmail.com';
        $admin1->username = 'thanhlong98';
        $admin1->password = bcrypt('123123123');
        $admin1->save();

        $admin2 = new Admin();
        $admin2->name = 'Hoang';
        $admin2->email = 'thanhhoang98@gmail.com';
        $admin2->username = 'thanhhoang98';
        $admin2->password = bcrypt('123123123');
        $admin2->save();
    }
}
