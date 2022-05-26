<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
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

        Blog::factory(3)->create([
            'category_id' => $design->id
        ]);

        Blog::factory(3)->create([
            'category_id' => $tech->id
        ]);

        Blog::factory(3)->create([
            'category_id' => $mobile->id
        ]);
    }
}
