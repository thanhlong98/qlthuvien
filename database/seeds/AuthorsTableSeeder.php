<?php

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $tg1 = new Author();
        $tg1->name = 'Nguyễn Nhật Ánh';
        $tg1->note = 'sinh ngày 7 tháng 5 năm 1955 là một tác giả người Việt viết cho thanh thiếu niên và người lớn. Ông cũng làm việc như một giáo viên, nhà thơ và phóng viên. Các tác phẩm của ông bao gồm khoảng 24 truyện ngắn, 2 bộ tiểu thuyết và một số tập thơ. Ông được coi là một trong những nhà văn thành công nhất của Việt Nam dành cho thanh thiếu niên. Bộ truyện nổi tiếng nhất của ông, Kính Vạn Hoa gồm 54 tập, đã được dựng thành 3 bộ phim truyền hình cùng tên.';
        $tg1->save();

        $tg2 = new Author();
        $tg2->name = 'Paulo Coelho';
        $tg2->note = 'Sinh ngày 24 tháng 8 năm 1947 là tiểu thuyết gia nổi tiếng người Brasil.';
        $tg2->save();

        $tg1 = new Author();
        $tg1->name = 'Kim Lân';
        $tg1->note = 'Sinh 1 tháng 8 năm 1920 - mất 20 tháng 7 năm 2007, tên thật là Nguyễn Văn Tài, là một nhà văn Việt Nam. Ông được biết đến với các tác phẩm văn học như Vợ nhặt, Làng.';
        $tg1->save();

        $tg4 = new Author();
        $tg4->name = 'Nguyễn Quang Sáng';
        $tg4->note = 'Sinh ngày 12 tháng 1 năm 1932 – 13 tháng 2 năm 2014, bút danh Nguyễn Sáng là nhà văn Việt Nam, từng đoạt Giải thưởng Hồ Chí Minh về Văn học – Nghệ thuật đợt II năm 2000. Ông được biết nhiều với vai trò tác giả và biên kịch của hai tác phẩm nổi tiếng là truyện ngắn Chiếc lược ngà và phim điện ảnh Cánh đồng hoang. Chiếc lược ngà sau này đã trở thành một tác phẩm quen thuộc trong giờ Việt văn của trường học, còn phim Cánh đồng hoang cũng trở thành một trong những tượng đài của điện ảnh Việt Nam.';
        $tg4->save();

        $tg5 = new Author();
        $tg5->name = 'Dương Thu Hương';
        $tg5->note = 'Sinh năm 1947 tại Thái Bình là một nữ văn sĩ người Việt Nam.';
        $tg5->save();

        $tg6 = new Author();
        $tg6->name = 'Tô Hoài';
        $tg6->note = 'Tên khai sinh: Nguyễn Sen; 27 tháng 9 năm 1920 – 6 tháng 7 năm 2014 là một nhà văn Việt Nam. Một số tác phẩm đề tài thiếu nhi của ông được dịch ra ngoại ngữ. Ông được nhà nước Việt Nam trao tặng Giải thưởng Hồ Chí Minh về Văn học – Nghệ thuật Đợt 1 (1996) cho các tác phẩm: Xóm giếng, Nhà nghèo, O chuột, Dế mèn phiêu lưu ký, Núi Cứu quốc, Truyện Tây Bắc, Mười năm, Xuống làng, Vỡ tỉnh, Tào Lường, Họ Giàng ở Phìn Sa, Miền Tây, Vợ chồng A Phủ, Tuổi trẻ Hoàng Văn Thụ.';
        $tg6->save();

        $tg7 = new Author();
        $tg7->name = 'Nguyễn Minh Châu';
        $tg7->note = 'Sinh ngày 20 tháng 10 năm 1930 - 23 tháng 1 năm 1989 là một nhà văn có ảnh hưởng quan trọng đối với văn học Việt Nam trong giai đoạn chiến tranh Việt Nam và thời kỳ đầu của đổi mới.';
        $tg7->save();

        $tg8 = new Author();
        $tg8->name = 'Nguyễn Thành Long';
        $tg8->note = 'Sinh 16 tháng 6 năm 1925 – 6 tháng 5 năm 1991, còn có các bút danh Lưu Quỳnh, Phan Minh Thảo, là một nhà văn Việt Nam.';
        $tg8->save();
    }
}
