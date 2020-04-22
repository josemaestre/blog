<?php

use App\Comment;
use Illuminate\Database\Seeder;



class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        

        Comment::truncate();
        for ($i=1; $i <100; $i++){
            Comment::create([
                'user_id'   => $faker->numberBetween($min = 1, $max = 5),
                'post_id'   => $faker->numberBetween($min = 1, $max = 20),
                'comment'   => $faker->text($maxNbChars = 220)
            ]);

        }
    }
}
