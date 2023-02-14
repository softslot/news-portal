<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testApplicationReturnsSuccessfulResponse()
    {
        $response = $this->get('/');

        $response->assertOk();
    }
}
