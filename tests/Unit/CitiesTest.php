<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Cities;

class CitiesTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_get_all_cities()
    {
        $cities = Cities::all();
        $this->assertGreaterThanOrEqual(0, count($cities));
    }
}
