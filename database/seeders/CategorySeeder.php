<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(['name'=>'category 1'])->create();
        Category::factory(['name'=>'category 2'])->create();
        Category::factory(['name'=>'category 3'])->create();
        Category::factory(['name'=>'category 4'])->create();
        Category::factory(['name'=>'category 5'])->create();
    }
}
