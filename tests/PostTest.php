<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_post_view()
    {
        factory(\App\Models\Post::class, 1)->create();

        $this->visit('/post')
            ->see('留言板');

        $this->visit('/post')
            ->see('#1');
    }

    public function test_post_create_view()
    {
        $this->visit('/post/create')
            ->see('新增留言');
    }

    public function test_post_create()
    {
        $input = [
            'title' => 'title',
            'message' => 'message',
            'user_id' => 1,
        ];

        $response = $this->json('POST', '/post', $input);
        $response->assertRedirectedTo('/post');
    }

    public function test_post_edit_view()
    {
        factory(\App\Models\Post::class, 1)->create();

        $this->visit('/post/1/edit')
            ->see('修改留言');
    }
}
