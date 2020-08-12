<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function testExampleCategory()
    {
        $response =$this->get ('/IndexCategory/');
        $response->assertStatus(200);
    }
    public function testIndexNews()
    {
        $response =$this->get ('/IndexNews/1');
        $response->assertStatus(200);
        $response->assertUnauthorized();
        $response->assertSuccessful();
    }
    public function testFeedbackSave(){
        $response =$this->get ('/news/feedback/save');
        $uri="http://laravel.local";
        $response->assertRedirect($uri);
    }



}
