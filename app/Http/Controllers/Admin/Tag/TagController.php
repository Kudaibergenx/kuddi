<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class TagController extends Controller
{
    public function create(){
        return view('admin.tag.index');
    }
    public function delete(Tag $tag){
        $tag->delete();
        return redirect()->route('admin.tag.index');
    }
    public function edit(Tag $tag){
        return view('admin.tag.edit', compact('tag'));
    }
    public function index(){
        $tags = Tag::all();
        return view('admin.tag.index', compact('tags'));
    }
    public function show(Tag $tag){
        return view('admin.tag.show', compact('tag'));
    }
    public function store(StoreRequest $request){
        $data = $request->validated();
        Tag::firstOrCreate($data);
        return redirect()->route('admin.tag.index');
    }
    public function update(StoreRequest $request, Tag $tag){
        $data = $request->validated();
        $tag->update($data);
        return view('admin.tag.show', compact('tag'));
    }
}
