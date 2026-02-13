<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_the_application_returns_a_response(): void
    {
        $response = $this->get('/');

        $this->assertTrue(
            in_array($response->getStatusCode(), [200, 302]),
            'Expected 200 or 302, got ' . $response->getStatusCode()
        );
    }
}
