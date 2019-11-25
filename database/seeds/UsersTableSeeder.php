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
            'name' => 'Nguyễn Thành Long',
            'email' => 'thanhlong@gmail.com',
            'username' => 'thanhlong@gmail.com',
            'password' => bcrypt('123')
        ]);
        DB::table('users')->insert([
            'name' => 'Nguyễn Văn Hoàng',
            'email' => 'vanhoang@gmail.com',
            'username' => 'vanhoang@gmail.com',
            'password' => bcrypt('123')
        ]);
        DB::table('users')->insert([
            'name' => 'Trần Nhân Tố',
            'email' => 'nhanto@gmail.com',
            'username' => 'nhanto@gmail.com',
            'password' => bcrypt('123')
        ]);
        DB::table('users')->insert([
            'name' => 'Trần Đặng Kim Khuê',
            'email' => 'kimkhue@gmail.com',
            'username' => 'kimkhue@gmail.com',
            'password' => bcrypt('123')
        ]);
        DB::table('users')->insert([
            'name' => 'Nguyễn Văn Linh',
            'email' => 'vanlinh@gmail.com',
            'username' => 'vanlinh@gmail.com',
            'password' => bcrypt('123')
        ]);
        DB::table('users')->insert([
            'name' => 'Lê Tuấn Tài',
            'email' => 'tuantai@gmail.com',
            'username' => 'tuantai@gmail.com',
            'password' => bcrypt('123')
        ]);
    }
}