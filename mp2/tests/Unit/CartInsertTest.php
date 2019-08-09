<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;

class CartInsertTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCarInsertTest()
    {
        $AuniqueMakeString = 'Makeeeee00000';

        $car = new Car();
        $car->make = $AuniqueMakeString;
        $car->model = 'model';
        $car->year = 1990;
        $car->save();

        //taken from here : https://laravel.com/docs/5.8/database-testing
        $this->assertDatabaseHas('cars', [
            'make' => $AuniqueMakeString
        ]);
    }
}
