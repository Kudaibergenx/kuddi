<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create(){
        return view('admin.category.index');
    }
    public function delete(Category $category){
        $category->delete();
        return redirect()->route('admin.category.index');
    }
    public function edit(Category $category){
        return view('admin.category.edit', compact('category'));
    }
    public function index(){
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }
    public function show(Category $category){
        return view('admin.category.show', compact('category'));
    }
    public function store(StoreRequest $request){
        $data = $request->validated();
        Category::firstOrCreate($data);
        return redirect()->route('admin.category.index');
    }
    public function update(StoreRequest $request, Category $category){
        $data = $request->validated();
        $category->update($data);
        return view('admin.categories.show', compact('category'));
    }
}
