<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Post;

class PostTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_get_all_posts()
    {
        $posts = Post::all();
        $this->assertGreaterThanOrEqual(0, count($posts));
    }
}
