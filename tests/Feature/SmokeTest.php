<?php

namespace Tests\Feature;

use Tests\TestCase;

class SmokeTest extends TestCase
{
    public function test_home_responds(): void
    {
        $response = $this->get('/');

        $this->assertTrue(
            in_array($response->getStatusCode(), [200, 302]),
            'Expected 200 or 302, got ' . $response->getStatusCode()
        );
    }
}
