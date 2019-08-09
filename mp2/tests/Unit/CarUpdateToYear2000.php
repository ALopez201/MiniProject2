<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;

class CarUpdateToYear2000 extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUpdateTo2kTest()
    {
        // make sure we have some data pre-seeded
        $this->seed();

        $aCar = \App\Car::inRandomOrder()->first();
        $aCar->year = 2000;
        $aCar->save();

        $check = Car::find($aCar);
        $this->assertEquals(2000, $check->year);
    }
}
