<?php

use App\Models\Image;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ImageTest extends TestCase
{
    use RefreshDatabase;

    private function testSeeder()
    {
        $this->seed(UserSeeder::class);
        $this->seed(AlbumSeeder::class);
        $this->seed(ImageSeeder::class);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_user_create()
    {
        $this->testSeeder();
        dd(Image::get()->toArray());

        $this->assertTrue(true);
    }
}
