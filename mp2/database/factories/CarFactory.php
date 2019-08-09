<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\App\Car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement(['ford', 'honda', 'toyota']),
        'model' => 'default',
        'year' => $faker->numberBetween(1930, 2018),
    ];
});
