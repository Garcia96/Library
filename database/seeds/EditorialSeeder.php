<?php

use Illuminate\Database\Seeder;
use App\Editorial;

class EditorialSeeder extends Seeder
{
	
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Editorial::create( [
          'name'=>'La esfera de los libros',
          'tel'=>'3526587',
          'address'=>'Calle 4 # 44-24',
        ]);
    }
}
