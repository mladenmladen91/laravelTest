<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $contact = factory('App\User')->create();
        
        $contact->notes()->create(['name'=> "testing only"]);
        
        $this->get('admin/user/edit/'.$contact->id)->assertSee($contact->first_name);
    }
}
