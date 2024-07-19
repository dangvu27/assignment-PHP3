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
        Schema::disableForeignKeyConstraints();
        Article::truncate();

        DB::table("article_sub_category")->truncate();

        for ($i = 0; $i < 10; $i++) {
            $article = Article::create([
                'author_id' => rand(1,10),
                'title' => fake()->realText(50),
                'content' => fake()->realText(100),
            ]);

            $subcategoryIDs = [
                rand(1,4),
                rand(5,10)
            ];

            $article->subcategories()->attach($subcategoryIDs);
        }

        Schema::enableForeignKeyConstraints();
    }
}
