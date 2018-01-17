<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BookAuthor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_author', function (Blueprint $table) {
        $table->integer('id_book')->unsigned();
        $table->integer('id_author')->unsigned();
        $table->primary(['id_author', 'id_book']);
        $table->foreign('id_book')->references('id')->on('book')->onDelete('cascade');
        $table->foreign('id_author')->references('id')->on('author')->onDelete('cascade');
       });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('book_author');
    }
}
