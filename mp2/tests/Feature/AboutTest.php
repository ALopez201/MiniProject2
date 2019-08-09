<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AboutTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAboutTest()
    {
        $this->get('/about')->assertStatus(200);
    }
}
