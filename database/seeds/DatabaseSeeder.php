<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EditorialSeeder::class);

    	$this->call(AuthorSeeder::class);

    	$this->call(BookSeeder::class);
    }
}
