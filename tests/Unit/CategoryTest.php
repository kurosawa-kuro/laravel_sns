<?php

use App\Models\Album;
use App\Models\Category;
use App\Models\Follower;
use App\Models\Image;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryTest extends TestCase
{
//    use RefreshDatabase;

    private function testSeeder()
    {
        User::truncate();
        Album::truncate();
        Image::truncate();
        Follower::truncate();
        Category::truncate();

        $this->seed(UserSeeder::class);
        $this->seed(AlbumSeeder::class);
        $this->seed(ImageSeeder::class);
        $this->seed(FollowerSeeder::class);
        $this->seed(CategorySeeder::class);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_user_create()
    {
        $this->testSeeder();
//        dd(Follower::get()->toArray());
//        dd(User::with('following')->get()->toArray());
//        dd(Follower::with('userfollow')->where(['follower_id'=>3])->get()->toArray());
        dd(Category::get()->toArray());

        $this->assertTrue(true);
    }
}
