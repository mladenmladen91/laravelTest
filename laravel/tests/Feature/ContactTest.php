<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $contact = factory('App\User',1000)->create()->each(function ($user) {
           $user->notes()->create(['name'=> "testing only"]);
        });
        
        $this->assertTrue(true);
        
    }
}
