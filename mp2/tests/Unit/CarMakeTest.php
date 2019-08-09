<?php

namespace Tests\Unit;

use Tests\TestCase;

class CarMakeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testValidMakeTest()
    {
        $car = factory(\App\Car::class)->make();
        $this->assertContains($car->make, ['toyota', 'ford', 'honda']);
    }
}
