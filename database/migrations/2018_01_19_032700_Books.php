<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title', 50);
        $table->integer('author_id')->unsigned();
        $table->integer('editorial_id')->unsigned();
        $table->double('price', 50);
        $table->datetime('date');
        $table->foreign('author_id')->references('id')->on('authors');
        $table->foreign('editorial_id')->references('id')->on('editorials');
        
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return voids
     */
    public function down()
    {
        Schema::drop('books');
    }
}
