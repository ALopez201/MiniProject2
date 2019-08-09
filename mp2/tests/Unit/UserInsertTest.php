<?php

namespace Tests\Unit;

use Tests\TestCase;

class UserInsertTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testInsertTest()
    {
        $email = 'lopezanthony92@gmail.com';

        $user = factory(\App\User::class)->make([
            'email' => $email
        ]);

        $user->save();

        //taken from here : https://laravel.com/docs/5.8/database-testing
        $this->assertDatabaseHas('users', [
            'email' => $email
        ]);
    }
}
