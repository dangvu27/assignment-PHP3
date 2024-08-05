<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 2345; $i++) { 
            Comment::create([
                'user_id' => rand(1, 10),
                'article_id' => rand(1,20),
                'content' => 'This is a comment '.$i,
            ]);
        }
    }
}
