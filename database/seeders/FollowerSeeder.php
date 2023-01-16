<?php

namespace Database\Seeders;

use App\Models\Follower;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FollowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Follower::factory()->create([
            'follower_id' => 1,
            'following_id' => 2,
        ]);
        Follower::factory()->create([
            'follower_id' => 1,
            'following_id' => 2,
        ]);
        Follower::factory()->create([
            'follower_id' => 1,
            'following_id' => 3,
        ]);
        Follower::factory()->create([
            'follower_id' => 2,
            'following_id' => 1,
        ]);
        Follower::factory()->create([
            'follower_id' => 2,
            'following_id' => 3,
        ]);
        Follower::factory()->create([
            'follower_id' => 3,
            'following_id' => 1,
        ]);
    }
}
