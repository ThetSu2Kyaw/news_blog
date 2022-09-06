<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create(Blog $blog){
        $formData = request()->validate([
            'body' => ['required', 'min: 10']
        ]);
        $formData['user_id'] = auth()->id();
        $blog->comments()->create($formData);

        return redirect("/blogs/$blog->slug");
    }
}
