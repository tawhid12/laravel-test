<?php

namespace Tests\Unit;

use App\Models\Post;
//use PHPUnit\Framework\TestCase;
use App\Http\Controllers\PostController;
use App\Http\Service\PostService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class PostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     */
    public function test_insert_posts_show(): void
    {
       $posts = Post::factory(20)->create();
       $response = (New PostService)->all_posts();
       $this->assertNotEmpty($response);
        //$this->assertTrue(true);
    }
}
