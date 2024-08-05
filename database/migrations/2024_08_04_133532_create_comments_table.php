<?php

use App\Models\Article;
use App\Models\User;
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
        Schema::create('comments', function (Blueprint $table) {
    
            $table->foreignIdFor(User::class)->constrained();
            $table->foreignIdFor(Article::class)->constrained(); 

            $table->text('content');
            $table->timestamps();

            // Định nghĩa khóa chính kết hợp
            $table->primary(['user_id', 'article_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
