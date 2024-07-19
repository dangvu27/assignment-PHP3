<?php

use App\Models\Article;
use App\Models\SubCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('article_subcategory', function (Blueprint $table) {
            
            $table->foreignIdFor(Article::class)->constrained();
            $table->foreignIdFor(SubCategory::class)->constrained();

            $table->primary(['article_id','sub_category_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_subcategory');
    }
};
