<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Book2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker::create('id_ID');
 
        
        for($x = 1; $x <= 10; $x++){
 
        	
        	DB::table('book2')->insert([
        		'book_judul' => $faker->Title,
                'book_penulis' => $faker->name,
                'book_penerbit' => $faker->company,
                'book_kategori' => $faker->title,
        	]);
 
        }
    }
}
