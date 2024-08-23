<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Author;
use App\Models\Category;

class ArticleController extends Controller
{
    public function category($id)
    {

        $artile12 = Article::orderByDesc('id')->where('category_id', $id)->limit(12)->get();

        $article5top = Article::orderByDesc('id')->limit(5)->get();

        $authorName = Author::all();

        $title = Category::orderByDesc('id')->where('id', $id)->pluck('name');

        return view('client.categories', compact('artile12', 'title', 'authorName', 'article5top'));
    }

    public function articleDetail($id)
    {

        $detail = Article::where('id', $id)->first();

        $authorName = Author::where('id', $detail->author_id)->select('name')->first();

        $allAuthorName = Author::all();

        $categoryName = Category::where('id', $detail->category_id)->select('name')->first();

        $categoryList = Category::all();

        $topView3 = Article::orderByDesc("view")->limit(3)->get();

        return view('client.articles', compact('detail', 'authorName', 'categoryName', 'topView3', 'allAuthorName', 'categoryList'));
    }

}
