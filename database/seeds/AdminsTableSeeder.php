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
            'name' => 'Nguyễn Thành Long',
            'passport_id' => '031352648',
            'address' => 'KTX',
            'phone' => '011223344',
            'username' => 'thanhlong',
            'password' => bcrypt('123')
        ]);
        DB::table('admins')->insert([
            'name' => 'Nguyễn Văn Hoàng',
            'passport_id' => '158648935',
            'address' => 'KTX',
            'phone' => '011223355',
            'username' => 'vanhoang',
            'password' => bcrypt('123')
        ]);
    }
}
