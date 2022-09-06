<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $with = ['author', 'category'];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function scopeFilter($query, $filter){
        $query->when($filter['category'] ?? false, function($query, $category){
            $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });
        $query->when($filter['username'] ?? false, function($query, $username){
            $query->whereHas('author', function($query) use ($username){
                $query->where('username', $username);
            });
        });
        $query->when($filter['search']?? false, function($query, $search){
            $query->where('title', 'LIKE', '%'.$search.'%')
                  ->orWhere('body', 'LIKE', '%'.$search.'%');
        });
    }
}
