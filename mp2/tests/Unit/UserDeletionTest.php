<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;

class UserDeletionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testDeletionTest()
    {
        // unique email
        $email = 'emailfordeletion@gmail.com';

        $opts = [
            'email' => $email
        ];

        $user = factory(\App\User::class)->make($opts);

        $user->save();

        $user = User::where($opts)->first();

        // let's check if it's saved
        $this->assertTrue($user != null);
        //taken from here : https://laravel.com/docs/5.8/database-testing
        $this->assertDatabaseHas('users', $opts);

        // Now delete it
        $user->delete();

        // Try to find it again
        $user = User::where($opts)->first();

        // Let's make sure it doesn't exist
        $this->assertNull($user);
    }
}
