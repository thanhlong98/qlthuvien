<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'name' => 'Tôi Thấy Hoa Vàng Trên Cỏ Xanh',
            'author_id' => '1',
            'category_book_id' => '1',
            'book_shelf_id' => '1',
            'publisher_id' => '1',
            'publishing_time' => '2010-12-09',
            'num_pages' => '300',
            'quantity' => '20'
        ]);
        DB::table('books')->insert([
            'name' => 'Chiếc Lược Ngà',
            'author_id' => '3',
            'category_book_id' => '2',
            'book_shelf_id' => '2',
            'publisher_id' => '2',
            'publishing_time' => '1966-01-01',
            'num_pages' => '200',
            'quantity' => '15'
        ]);
        DB::table('books')->insert([
            'name' => 'Vợ Nhặt',
            'author_id' => '4',
            'category_book_id' => '2',
            'book_shelf_id' => '3',
            'publisher_id' => '3',
            'publishing_time' => '1962-01-01',
            'num_pages' => '200',
            'quantity' => '10'
        ]);
        DB::table('books')->insert([
            'name' => 'Nhà Giả Kim',
            'author_id' => '3',
            'category_book_id' => '3',
            'book_shelf_id' => '3',
            'publisher_id' => '3',
            'publishing_time' => '1988-01-01',
            'num_pages' => '300',
            'quantity' => '15'
        ]);
        DB::table('books')->insert([
            'name' => 'Những Thiên Đường Mù',
            'author_id' => '5',
            'category_book_id' => '3',
            'book_shelf_id' => '3',
            'publisher_id' => '4',
            'publishing_time' => '1988-01-01',
            'num_pages' => '250',
            'quantity' => '5'
        ]);
        DB::table('books')->insert([
            'name' => 'Dế Mèn Phiêu Lưu Ký',
            'author_id' => '6',
            'category_book_id' => '1',
            'book_shelf_id' => '2',
            'publisher_id' => '4',
            'publishing_time' => '1941-01-01',
            'num_pages' => '150',
            'quantity' => '5'
        ]);
        DB::table('books')->insert([
            'name' => 'Cô Gái Đến Từ Hôm Qua',
            'author_id' => '1',
            'category_book_id' => '1',
            'book_shelf_id' => '9',
            'publisher_id' => '5',
            'publishing_time' => '2017-01-01',
            'num_pages' => '300',
            'quantity' => '15'
        ]);
        DB::table('books')->insert([
            'name' => 'Lặng Lẽ Sapa',
            'author_id' => '9',
            'category_book_id' => '2',
            'book_shelf_id' => '8',
            'publisher_id' => '3',
            'publishing_time' => '1970-01-01',
            'num_pages' => '152',
            'quantity' => '6'
        ]);
        DB::table('books')->insert([
            'name' => 'Rừng Na Uy',
            'author_id' => '8',
            'category_book_id' => '3',
            'book_shelf_id' => '6',
            'publisher_id' => '1',
            'publishing_time' => '1987-01-01',
            'num_pages' => '300',
            'quantity' => '10'
        ]);
        DB::table('books')->insert([
            'name' => 'Ba Người Khác',
            'author_id' => '6',
            'category_book_id' => '3',
            'book_shelf_id' => '4',
            'publisher_id' => '3',
            'publishing_time' => '2006-01-01',
            'num_pages' => '250',
            'quantity' => '20'
        ]);
    }
}
