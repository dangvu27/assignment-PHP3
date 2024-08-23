<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Author;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard()
    {
        $memberCount = User::where('type', 'member')->count();
        $articleCount = Article::count();
        $commentCount = Comment::count();
        $categoryCount = Category::count();

        $newMember = User::where('type', 'member')
            ->orderByDesc('id')
            ->limit(5)
            ->with([
                'userDetail' => function ($query) {
                    $query->select('user_id', 'name', 'date-of-birth', 'phone', 'address');
                }
            ])->get(['id', 'email']);

        return view('admin.index', compact('memberCount', 'articleCount', 'commentCount', 'categoryCount', 'newMember'));
    }

    public function index()
    {

        $articles = Article::with(['author', 'category'])->withCount('comments')->orderByDesc('id')->get();
        // dd($articles);
        return view('admin.list-articles', compact('articles'));
    }

    public function create()
    {
        $categories = Category::all()->pluck('name');
        $authors = Author::all()->pluck('name');
        // dd($categories,$authors);
        return view('admin.create-articles', compact('categories', 'authors'));
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'content' => 'required|string',
                'options_category' => 'required',
                'customValueCategory' => 'nullable|string',
                'options_author' => 'required',
                'customValueAuthor' => 'nullable|string',
            ]);

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public');
                $imageUrl = Storage::url($imagePath);
            } else {
                $imagePath = null;
            }

            $article = new Article();
            $article->title = $request['title'];
            $article->content = $request['content'];
            $article->img = $imageUrl;
            $article->category_id = $request['options_category'] === 'other' ? $this->createCategory($request['customValueCategory']) : $request['options_category'];
            $article->author_id = $request['options_author'] === 'other' ? $this->createAuthor($request['customValueAuthor']) : $request['options_author'];
            $article->save();
            // dd($article);
            return redirect()->route('articles.index')->with('success', 'Bài viết đã được thêm thành công!');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    private function createCategory($name)
    {
        $category = new Category();
        $category->name = $name;
        $category->save();

        return $category->id;
    }

    private function createAuthor($name)
    {
        $author = new Author();
        $author->name = $name;
        $author->save();

        return $author->id;
    }

    public function show(Article $article)
    {
        $articles = Article::with(['author', 'category'])->withCount('comments')->orderByDesc('id')->get();
        // dd($articles);
        return view('admin.list-articles', compact('articles'));
    }

    public function edit(Article $article)
    {
        $article->load(['author', 'category']);
        return view('admin.update-articles', compact('article'));
    }
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $article->title = $request['title'];
        $article->content = $request['content'];
        $article->save();

        return redirect()->route('articles.show', $article)->with('success', 'Bài viết đã được cập nhật thành công.');
    }
    public function destroy(Article $article)
    {
        $article->comments()->delete();
        $article->delete();

        // Chuyển hướng hoặc trả về phản hồi
        return redirect()->route('articles.index')->with('success', 'Bài viết đã được xóa thành công.');
    }

}