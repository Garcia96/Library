<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Book extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title', 50);
        $table->integer('author_id')->unsigned();
        $table->integer('editorial_id')->unsigned();
        $table->double('price', 50);
        $table->datetime('date');
        $table->foreign('author_id')->references('id')->on('author');
        $table->foreign('editorial_id')->references('id')->on('editorial');
        
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('book');
    }
}
