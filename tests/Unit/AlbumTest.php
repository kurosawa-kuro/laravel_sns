<?php


use App\Models\Album;
use Database\Seeders\UserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AlbumTest extends TestCase
{
    use RefreshDatabase;

    private function testSeeder()
    {
        $this->seed(UserSeeder::class);
        $this->seed(AlbumSeeder::class);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_user_create()
    {
        $this->testSeeder();
        dd(Album::with('user')->get()->toArray());
        $this->assertTrue(true);

    }
}
