<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'category_name' => 'design',
            'slug' => 'test-desgin'
        ]);
        Category::create([
            'category_name' => 'web',
            'slug' => 'test-web'
        ]);
        Category::create([
            'category_name' => 'backend',
            'slug' => 'test-backend'
        ]);

    }
}
