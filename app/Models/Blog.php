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

    public function scopeFilter($query){
        $query->when(request('category'), function($query, $category){
            $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });
    }
}
