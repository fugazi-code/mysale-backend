<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_get_all_user()
    {
        $users = User::all();
        $this->assertGreaterThanOrEqual(0, count($users));
    }
}
