<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\PostImage;
use App\Models\User;
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
        $this->call([
            CitiesSeeder::class,
            CategorySeeder::class,
        ]);

        User::factory()
            ->count(100)
            ->has(
                Post::factory()->count(10)->has(PostImage::factory()->count(1))
            )
            ->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@site.com',
        ]);
    }
}
