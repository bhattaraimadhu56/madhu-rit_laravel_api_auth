<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    
    public function test_database()
    { 
        // check whether users table have email and given name or not
        // assuming that madhu@gmail.com and madhu is in users table as i have registered with that
        $this->assertDatabaseHas('users',['email' => 'madhu@gmail.com','name'=>'madhu']);
    }
}
