<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $design = Category::factory()->create([
            'name' => 'design',
            'slug' => 'design'
        ]);

        $tech = Category::factory()->create([
            'name' => 'tech',
            'slug' => 'technology'
        ]);

        $mobile = Category::factory()->create([
            'name' => 'mobile',
            'slug' => 'mobile'
        ]);

        $designBlog = Blog::factory(3)->create([
            'category_id' => $design->id
        ]);

        $techBlog = Blog::factory(3)->create([
            'category_id' => $tech->id
        ]);

        $mobileBlog = Blog::factory(3)->create([
            'category_id' => $mobile->id
        ]);

        // Comment::factory(5)->create([
        //     'blog_id' => 1
        // ]);

    }
}
