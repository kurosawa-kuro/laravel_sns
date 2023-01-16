<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::factory(['album_id'=>1])->create();
        Image::factory(['album_id'=>1])->create();
        Image::factory(['album_id'=>2])->create();
    }
}
