<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class APIRequestTest extends TestCase
{
    
    public function test_debugging()
    {
        $response = $this->get('/api/items');

        $response->dumpHeaders();

        $response->dumpSession();

        $response->dump();
    }
}
