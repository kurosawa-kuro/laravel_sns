<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\User;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Album::factory(['user_id'=>1,'name'=>'name 1'])->create();
        Album::factory(['user_id'=>2,'name'=>'name 2'])->create();
        Album::factory(['user_id'=>3,'name'=>'name 3'])->create();
    }
}
