<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++){

            $bookObject = new Post();
            $bookObject->title = $faker->sentence(5);  
            $bookObject->content = $faker->paragraph(5);
            $bookObject->img = "https://picsum.photos/300/300?random={{$i}}";
            $bookObject->save();
        }
    }
}
