<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public  function  setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }
    public function testGetRoute(){
        $url = route('test');
        $response = $this->call('GET', $url);
        $this->assertEquals(200, $response->status(), $url.' did not return a 200');
    }
}
