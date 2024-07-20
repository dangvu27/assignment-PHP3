<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Thời sự', 'Kinh doanh', 'Bất động sản', 'Khoa học', 'Giải trí', 'Đời sống', 'Thể thao'];
        foreach ($categories as $category) {
            Category::create([
                'name'=> $category,
            ]);
        }                
    }
}
