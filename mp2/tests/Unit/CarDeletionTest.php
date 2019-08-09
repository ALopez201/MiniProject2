<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;

class CarDeletionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testDeletionTest()
    {
        // make sure we have some data pre-seeded
        $this->seed();

        $aCar = \App\Car::inRandomOrder()->first();
        $id = $aCar->id;
        $aCar->delete();

        $check = Car::find($id);
        $this->assertNull($check);
    }
}
