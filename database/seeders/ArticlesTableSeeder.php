<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar tabla articles
        Article::truncate();

        $faker = \Faker\Factory::create();
        
        //Crea articulos ficticios en la tabla
        for( $i = 0; $i < 10; $i++ ){
            Article::create([
                'title' => $faker-> sentence,
                'body' => $faker-> paragraph,
            ]);
        }
    }
}