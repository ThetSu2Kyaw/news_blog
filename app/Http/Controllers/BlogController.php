<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::latest();
        return view('blogs.index',[
            'blogs' => $blogs->filter(request(['category', 'search', 'username']))->paginate(6)->withQueryString(),
            'categories' => Category::all()
        ]);
    }

    function show(Blog $blog) {
        return view('blogs.show', [
            'blog' => $blog,
            'randomBlogs' => Blog::inRandomOrder()->take(3)->get()
        ]);
    }
}
