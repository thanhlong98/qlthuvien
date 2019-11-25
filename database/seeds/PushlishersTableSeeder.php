<?php

use Illuminate\Database\Seeder;
use App\Models\Publisher;

class PushlishersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nxb1 = new Publisher();
        $nxb1->name = "Nhà xuất bản CANARIA (Nhật Bản)";
        $nxb1->address = "Nhật Bản";
        $nxb1->email = "canaria@gmail.com";
        $nxb1->phone = "088888888";
        $nxb1->save();

        $nxb2 = new Publisher();
        $nxb2->name = "'Nhà xuất bản Văn hóa _ Văn nghệ TP.HCM";
        $nxb2->address = "88 - 90 Ký Con, Phường Nguyễn Thái Bình, Quận 1, Hồ Chí Minh.";
        $nxb2->email = "nxbvhvn@nxbvanhoavannghe.org.vn";
        $nxb2->phone = "02838 224 955";
        $nxb2->save();

        $nxb3 = new Publisher();
        $nxb3->name = "Nhà xuất bản Văn học";
        $nxb3->address = "18 Nguyễn Trường Tộ, P.Trúc Bạch, Ba Đình, Hà Nội.";
        $nxb3->email = "tonghopvanhoc@vnn.vn";
        $nxb3->phone = "043 7161518";
        $nxb3->save();

        $nxb4 = new Publisher();
        $nxb4->name = "Nhà xuất bản Kim Đồng";
        $nxb4->address = "55 Quang Trung, Nguyễn Du, Hai Bà Trưng, Hà Nội";
        $nxb4->email = "info@nxbkimdong.com.vn";
        $nxb4->phone = "0243 8229085";
        $nxb4->save();

        $nxb5 = new Publisher();
        $nxb5->name = "Nhà xuất bản Trẻ";
        $nxb5->address = "161B Lý Chính Thắng, Phường 7, Quận 3 , TP. Hồ Chí Minh";
        $nxb5->email = "hopthubandoc@nxbtre.com.vn";
        $nxb5->phone = "028 39316289";
        $nxb5->save();
    
    }
}
