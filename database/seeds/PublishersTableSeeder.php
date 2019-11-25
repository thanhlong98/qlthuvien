<?php

use Illuminate\Database\Seeder;

class PublishersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            'name' => 'Nhà xuất bản CANARIA (Nhật Bản)',
            'address' => 'Nhật Bản',
            'email' => 'canaria@gmail.com',
            'phone' => '088888888'
        ]);
        DB::table('publishers')->insert([
            'name' => 'Nhà xuất bản Văn hóa _ Văn nghệ TP.HCM',
            'address' => '88 - 90 Ký Con, Phường Nguyễn Thái Bình, Quận 1, Hồ Chí Minh.',
            'email' => 'nxbvhvn@nxbvanhoavannghe.org.vn',
            'phone' => '02838 224 955'
        ]);
        DB::table('publishers')->insert([
            'name' => 'Nhà xuất bản Văn học',
            'address' => '18 Nguyễn Trường Tộ, P.Trúc Bạch, Ba Đình, Hà Nội. ',
            'email' => 'tonghopvanhoc@vnn.vn',
            'phone' => '043 7161518'
        ]);
        DB::table('publishers')->insert([
            'name' => 'Nhà xuất bản Kim Đồng',
            'address' => '55 Quang Trung, Nguyễn Du, Hai Bà Trưng, Hà Nội',
            'email' => 'info@nxbkimdong.com.vn',
            'phone' => '0243 8229085'
        ]);
        DB::table('publishers')->insert([
            'name' => 'Nhà xuất bản Trẻ',
            'address' => '161B Lý Chính Thắng, Phường 7, Quận 3 , TP. Hồ Chí Minh',
            'email' => 'hopthubandoc@nxbtre.com.vn',
            'phone' => '028 39316289'
        ]);
    }
}
