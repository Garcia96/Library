<?php

use Illuminate\Database\Seeder;
use App\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create( [
          'title'=>'100 años de soledad',
          'price'=>'49000',
          'author_id'=>'1',
          'editorial_id'=>'1',
          'date'=>'2000-01-01',
        ]);
    }
}
