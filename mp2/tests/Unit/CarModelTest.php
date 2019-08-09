<?php

namespace Tests\Unit;

use Tests\TestCase;

class CarModelTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCarModelTest()
    {
        $car = factory(\App\Car::class)->make();
        $this->assertInternalType("string", $car->model);
    }
}
