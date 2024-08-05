<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Author;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){

        $newPost = Article::orderByDesc("id")->limit(6)->get();

        $thoiSu = Article::orderByDesc("id")->where("category_id",1)->limit(4)->get();

        $theThao = Article::orderByDesc("id")->where("category_id",7)->limit(4)->get();
        
        $doiSong = Article::orderByDesc("id")->where("category_id",5)->limit(4)->get();

        $topView5 = Article::orderByDesc("view")->limit(5)->get();

        $authorName = Author::all();

        return view("client.index",compact("newPost","thoiSu","theThao","doiSong","authorName","topView5"));
    }
}
