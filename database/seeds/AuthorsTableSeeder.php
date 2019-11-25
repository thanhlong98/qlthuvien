<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            'name' => 'Nguyễn Nhật Anh',
            'note' => 'sinh ngày 7 tháng 5 năm 1955 là một tác giả người Việt viết cho thanh thiếu niên và người lớn. Ông cũng làm việc như một giáo viên, nhà thơ và phóng viên. Các tác phẩm của ông bao gồm khoảng 24 truyện ngắn, 2 bộ tiểu thuyết và một số tập thơ. Ông được coi là một trong những nhà văn thành công nhất của Việt Nam dành cho thanh thiếu niên. Bộ truyện nổi tiếng nhất của ông, Kính Vạn Hoa gồm 54 tập, đã được dựng thành 3 bộ phim truyền hình cùng tên.'
        ]);
        DB::table('authors')->insert([
            'name' => 'Paulo Coelho',
            'note' => 'Sinh ngày 24 tháng 8 năm 1947 là tiểu thuyết gia nổi tiếng người Brasil.'
        ]);
        DB::table('authors')->insert([
            'name' => 'Nguyễn Quan Sách',
            'note' => 'Sinh ngày 12 tháng 1 năm 1932 – 13 tháng 2 năm 2014, bút danh Nguyễn Sáng là nhà văn Việt Nam, từng đoạt Giải thưởng Hồ Chí Minh về Văn học – Nghệ thuật đợt II năm 2000. Ông được biết nhiều với vai trò tác giả và biên kịch của hai tác phẩm nổi tiếng là truyện ngắn Chiếc lược ngà và phim điện ảnh Cánh đồng hoang. Chiếc lược ngà sau này đã trở thành một tác phẩm quen thuộc trong giờ Việt văn của trường học, còn phim Cánh đồng hoang cũng trở thành một trong những tượng đài của điện ảnh Việt Nam.'
        ]);
        DB::table('authors')->insert([
            'name' => 'Kim Lân',
            'note' => 'Sinh 1 tháng 8 năm 1920 - mất 20 tháng 7 năm 2007, tên thật là Nguyễn Văn Tài, là một nhà văn Việt Nam. Ông được biết đến với các tác phẩm văn học như Vợ nhặt, Làng.'
        ]);
        DB::table('authors')->insert([
            'name' => 'Dương Thu Hương',
            'note' => 'Sinh năm 1947 tại Thái Bình là một nữ văn sĩ người Việt Nam.'
        ]);
        DB::table('authors')->insert([
            'name' => 'Tô Hoài',
            'note' => 'Tên khai sinh: Nguyễn Sen; 27 tháng 9 năm 1920 – 6 tháng 7 năm 2014 là một nhà văn Việt Nam. Một số tác phẩm đề tài thiếu nhi của ông được dịch ra ngoại ngữ. Ông được nhà nước Việt Nam trao tặng Giải thưởng Hồ Chí Minh về Văn học – Nghệ thuật Đợt 1 (1996) cho các tác phẩm: Xóm giếng, Nhà nghèo, O chuột, Dế mèn phiêu lưu ký, Núi Cứu quốc, Truyện Tây Bắc, Mười năm, Xuống làng, Vỡ tỉnh, Tào Lường, Họ Giàng ở Phìn Sa, Miền Tây, Vợ chồng A Phủ, Tuổi trẻ Hoàng Văn Thụ.'
        ]);
        DB::table('authors')->insert([
            'name' => 'Nguyễn Minh Châu',
            'note' => 'Sinh ngày 20 tháng 10 năm 1930 - 23 tháng 1 năm 1989 là một nhà văn có ảnh hưởng quan trọng đối với văn học Việt Nam trong giai đoạn chiến tranh Việt Nam và thời kỳ đầu của đổi mới.'
        ]);
        DB::table('authors')->insert([
            'name' => 'Murakami Haruki',
            'note' => 'sinh năm 1949 là một trong những tiểu thuyết gia, dịch giả văn học người Nhật Bản được biết đến nhiều nhất hiện nay cả trong lẫn ngoài nước Nhật. Từ thời điểm nhận giải thưởng Nhà văn mới Gunzo năm 1979 đến nay, hơn một phần tư thế kỷ hoạt động và viết lách, tác phẩm của ông đã được dịch ra khoảng 38 thứ tiếng trên thế giới, đồng thời trong nước ông là người luôn tồn tại ở tiền cảnh sân khấu văn học Nhật Bản. Murakami đã trở thành hiện tượng trong văn học Nhật Bản đương đại với những mĩ danh "nhà văn được yêu thích", "nhà văn best-seller", "nhà văn của giới trẻ".'
        ]);
        DB::table('authors')->insert([
            'name' => 'Nguyễn Thành Long',
            'note' => 'Sinh 16 tháng 6 năm 1925 – 6 tháng 5 năm 1991, còn có các bút danh Lưu Quỳnh, Phan Minh Thảo, là một nhà văn Việt Nam.'
        ]);
    }
}
