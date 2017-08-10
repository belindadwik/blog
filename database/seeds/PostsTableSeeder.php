<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Post;
use App\User;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
    	foreach (range(1,50) as $index) {
        DB::table('posts')->insert([
          'title' => $faker->word,
          'seotitle' => $faker->sentence($nbWords = 6, $variableNbWords = true),
          'author' => $faker->name,
          'content' => $faker->text,
          'image' => $faker->imageUrl($width = 640, $height = 480),
          'hits' => 100,
          'headline' => 'N',
          'active' => 'Y',
          'status' => 'publish',
          'created_at' => $faker->dateTime($max = 'now'),
        ]);
      }
    }
}
