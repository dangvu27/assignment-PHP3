<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Article;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Lấy từ khóa tìm kiếm từ request
        $query = $request->input('search');
        
        // Thực hiện tìm kiếm trong cơ sở dữ liệu
        $articlesTK = Article::where('title', 'like', "%{$query}%")
            ->orWhere('content', 'like', "%{$query}%")
            ->get();
        $article5top = Article::orderByDesc('id')->limit(5)->get();
        $authorName = Author::all();
        // Trả về view với dữ liệu tìm kiếm
        return view('client.search_results', compact('articlesTK','article5top','authorName'));
    }
}
