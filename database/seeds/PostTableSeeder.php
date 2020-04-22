<?php

use App\Post;
use Illuminate\Database\Seeder;



class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        

        Post::truncate();
        for ($i=1; $i <21; $i++){
            Post::create([
                'user_id'   => $faker->numberBetween($min = 1, $max = 5),
                'post'      => $faker->sentence($nbWords = 14, $variableNbWords = true) ,
                'content'   => $faker->text($maxNbChars = 350),
                'vote_up'   => $faker->numberBetween($min = 1, $max = 100),
                'vote_down' => $faker->numberBetween($min = 1, $max = 80)
            ]);

        }
    }
}
