<?php

namespace Tests\Unit;

use Tests\TestCase;

class CarYearTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCarYearTest()
    {
        $car = factory(\App\Car::class)->make();
        // $this->assertTrue(is_integer($car->year));
        $this->assertInternalType("int", $car->year);
    }
}
