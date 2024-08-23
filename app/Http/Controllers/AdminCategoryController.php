<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderByDesc('id')->get();
        // dd($categories);
        return view('admin.category-list', compact('categories'));
    }

    public function create()
    {
        return view('admin.category-create');
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string'
            ]);

            $category = new Category([
                'name' => $request['name']
            ]);
            $category->save();
            // dd($article);
            return redirect()->route('categories.index')->with('success', 'Loại tin đã được thêm thành công!');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('admin.category-update', compact('category'));
    }
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string'
        ]);
        $category->name = $request['name'];
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Bài viết đã được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->article()->delete();
        $category->delete();

        // Chuyển hướng hoặc trả về phản hồi
        return redirect()->route('categories.index')->with('success', 'Bài viết đã được xóa thành công.');
    }
}
