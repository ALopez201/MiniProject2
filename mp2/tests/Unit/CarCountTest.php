<?php

namespace Tests\Unit;

use App\Car;
use App\User;
use Tests\TestCase;

class CarCountTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCarCountTest()
    {
        $this->seed();

        $carCount = Car::all()->count();

        $this->assertEquals(50, $carCount);
    }
}
