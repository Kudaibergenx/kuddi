<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function create(){
        return view('admin.post.index');
    }
    public function delete(Post $post){
        $post->delete();
        return redirect()->route('admin.post.index');
    }
    public function edit(Post $post){
        return view('admin.post.edit', compact('post'));
    }
    public function index(){
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }
    public function show(Post $post){
        return view('admin.post.show', compact('post'));
    }
    public function store(StoreRequest $request){
        $data = $request->validated();
        Post::firstOrCreate($data);
        return redirect()->route('admin.post.index');
    }
    public function update(StoreRequest $request, Post $post){
        $data = $request->validated();
        $post->update($data);
        return view('admin.post.show', compact('post'));
    }
}
