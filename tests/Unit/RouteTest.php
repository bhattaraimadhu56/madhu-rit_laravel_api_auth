<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class RouteTest extends TestCase
{
    
     
    public function test_route_request()
    {
         $response = $this->get('/api/items')->assertStatus(200);
    }
}