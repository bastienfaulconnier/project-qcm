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
        $tab = ["published", "unpublished"];

    	for($i = 0; $i < 10; $i++) {
            $rand = array_rand($tab, 1);

	        DB::table('posts')->insert([
        		"title" 	  	  => $faker->sentence(5, true),
        		"abstract" 	  	  => $faker->paragraph(),
        		"content" 	  	  => $faker->paragraphs(3, true),
        		"url_thumbnail"   => $faker->imageUrl(500, 500),
        		"date" 			  => $faker->date('Y-m-d', 'now'),
        		"status" 		  => $tab[$rand],
        		"user_id" 		  => 1
	        ]);
        }
    }
}
