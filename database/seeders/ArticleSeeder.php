<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            '/client/images/blog-list-01.jpg',
            '/client/images/blog-list-02.jpg',
            '/client/images/blog-list-03.jpg',
            '/client/images/blog-list-04.jpg',
            '/client/images/blog-list-05.jpg',
            '/client/images/blog-list-06.jpg',
            '/client/images/entertaiment-01.jpg',
            '/client/images/entertaiment-02.jpg',
            '/client/images/entertaiment-03.jpg',
            '/client/images/entertaiment-04.jpg',
            '/client/images/entertaiment-05.jpg',
            '/client/images/entertaiment-06.jpg',
        ];
        for ($i = 0; $i < 100; $i++) {
            Article::create([
                'author_id' => rand(1,10),
                'category_id' => rand(1,7),
                'title' => fake()->realText(50),
                'content' => fake()->realText(2000),
                'img' => $data[array_rand($data)],
                'view'=> rand(1,2000),
            ]);
        }
    }
}
