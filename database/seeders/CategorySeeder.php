<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category; // Import model Category
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');
        
        Category::create(['name' => 'Data Science', 'slug' => 'data-science', 'description' => 'Learn about data science.']);
        Category::create(['name' => 'Network Security', 'slug' => 'network-security', 'description' => 'Learn about network security.']);
        Category::create(['name' => 'Interactive Multimedia', 'slug' => 'interactive-multimedia', 'description' => 'Learn about interactive multimedia.']);
        Category::create(['name' => 'Software Engineering', 'slug' => 'software-engineering', 'description' => 'Learn about software engineering.']);
    }
}
