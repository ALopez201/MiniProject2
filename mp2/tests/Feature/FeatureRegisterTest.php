<?php

namespace Tests\Feature;

use Tests\TestCase;

class FeatureRegisterTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRegister200CodeTest()
    {
        $this->get('/register')->assertStatus(200);

    }
}
