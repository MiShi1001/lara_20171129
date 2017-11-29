<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function testPostCreatePage()
    {
        $response = $this ->get('post/create');
        $response->assertStatus(200)
            ->assertViewIs('posts.create')
            ->assertSeeText('新增');
        //$this->assertTrue(true);
    }
}
