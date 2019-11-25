<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');

            $table->bigInteger('author_id')->unsigned();
            $table->bigInteger('category_book_id')->unsigned();
            $table->bigInteger('book_shelf_id')->unsigned();
            $table->bigInteger('publisher_id')->unsigned();
            $table->date('publishing_time');
            $table->integer('num_pages');
            $table->integer('quantity');

            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
            $table->foreign('category_book_id')->references('id')->on('category_books')->onDelete('cascade');
            $table->foreign('book_shelf_id')->references('id')->on('book_shelves')->onDelete('cascade');
            $table->foreign('publisher_id')->references('id')->on('publishers')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
