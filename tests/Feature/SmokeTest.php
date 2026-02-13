<?php

namespace Tests\Feature;

use Tests\TestCase;

class SmokeTest extends TestCase
{
    public function test_home_redirects(): void
    {
        $response = $this->get('/');
        $response->assertStatus(302);
    }
}
