<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;
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

        //Creo una lista di categorie
        $categoryList = [
            'affari',
            'cinema',
            'cronaca',
            'intrattenimento',
            'musica',
            'opinione',
            'salute',
            'scienza e tecnologia',
            'sport',
            'turismo',
        ];
        
        //creo un array vuoto dove pusherò l'id della categoria
        $listOfCategoryID = []; 

        
        foreach($categoryList as $category) {
            $categoryObject = new Category();
            $categoryObject->category = $category;
            $categoryObject->save();

            $listOfCategoryID[] = $categoryObject->id;
        }

        for ($i = 0; $i < 50; $i++){

            //Post
            $postObject = new Post();
            $postObject->title = $faker->sentence(5);  
            $postObject->content = $faker->paragraph(5);
            $postObject->img = "https://picsum.photos/300/300?random={{$i}}";
            
            //Inserico la categoria
            $randCategoryKey = array_rand($listOfCategoryID, 1);
            $categoryID = $listOfCategoryID[$randCategoryKey];
            $postObject->category_id = $categoryID;
            
            //salvo
            $postObject->save();
        }
    }
}
