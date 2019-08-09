<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;

class UserCountTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCountUsersTest()
    {
        // reference https://laravel-news.com/seeding-data-testing
        $this->seed();

        $count = User::all()->count();

        // Taken from here https://www.5balloons.info/laravel-tdd-beginner-crud-example/
        $this->assertEquals(50, $count);

    }
}
