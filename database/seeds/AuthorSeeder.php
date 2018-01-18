<?php

use Illuminate\Database\Seeder;
use App\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::create( [
          'nit'=>'1010101010',
          'name'=>'Gabriel',
          'lastname'=>'Garcia Marquez',
          'tel'=>'3526587',
        ]);
    }
}
