<?php

namespace Tests\Unit;

use Tests\TestCase;

class UserUpdateToSteveSmithTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testRenameTest()
    {
        // create some random data using the seeders
        $this->seed();

        $newName = 'Steve Smith';

        $user = \App\User::inRandomOrder()->first();
        $user->name = $newName;
        $user->save();

        //taken from here : https://laravel.com/docs/5.8/database-testing
        $this->assertDatabaseHas('users', [
            'name' => $newName
        ]);

    }
}
