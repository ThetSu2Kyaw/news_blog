<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    function index(){
        return view('admin.index', [
            "blogs" => Blog::all(),
            "categories" => Category::all(),
            "users" => User::all(),
            "comments" => Comment::all()
        ]);
    }

    function show(){
        return view('admin.show', [
            "blogs" => Blog::paginate(3)
        ]);
    }

    function create(){
        return view('admin.create',[
            "categories" => Category::all()
        ]);
    }

    function store(){
        $formData = request()->validate([
            'title' => ['required'],
            'slug' => ['required', Rule::unique('blogs', 'slug')],
            'intro' => ['required'],
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'body' => ['required']
        ]);

        $formData['user_id'] = auth()->id();
        $formData['thumbnail'] = request('thumbnail')->store('thumbnails');
        Blog::create($formData);

        return redirect('/');
    }
    
    function edit(Blog $blog){
        return view('admin.edit', [
            "blog" => $blog,
            "categories" => Category::all()
        ]);
    }
    
    function update(Blog $blog){
        $formData = request()->validate([
            'title' => ['required'],
            'slug' => ['required', Rule::unique('blogs', 'slug')->ignore($blog->id)],
            'intro' => ['required'],
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'body' => ['required']
        ]);
        $formData['user_id'] = auth()->id();
        $formData['thumbnail'] = request('thumbnail')? request('thumbnail')->store('thumbnails'): $blog->thumbnail;
        $blog->update($formData);

        return redirect('/');
    }

    function destroy(Blog $blog){
        $blog->delete();

        return redirect('/admin/blogs');
    }
}
