<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testcontactTest()
    {
        $this->get('/contactus')->assertStatus(200);
    }
}
