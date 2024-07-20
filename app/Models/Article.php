<?php

namespace App\Models;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        "author_id",
        "category_id",
        "title",
        "content",
        "img",
        "views",
    ] ;

    public function author(){
        return $this->belongsTo(Author::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function topView3(){
        return $this->orderByDesc("view")->limit(3)->get();
    }
}
