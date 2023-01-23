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
            RoleSeeder::class,
        ]);

        if (!in_array(app()->environment(), ['production'])) {
            $this->seedSamples();
        }

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@site.com',
            'role_id' => 1,
        ]);
    }

    public function seedSamples()
    {
        User::factory()
            ->count(100)
            ->has(
                Post::factory()->count(10)->has(PostImage::factory()->count(1))
            )
            ->create();
    }
}
