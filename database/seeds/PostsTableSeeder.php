<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
    	for($i = 0; $i < 5; $i++) {
	        DB::table('posts')->insert([
        		"title" 	  	  => $faker->sentence(5, true),
        		"abstract" 	  	  => $faker->paragraph(),
        		"content" 	  	  => $faker->paragraphs(3, true),
        		"url_thumbnail"   => $faker->imageUrl(500, 500),
        		"date" 			  => $faker->date('Y-m-d', 'now'),
        		"status" 		  => "published",
        		"user_id" 		  => 1
	        ]);
        }
    }
}
