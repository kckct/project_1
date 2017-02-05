<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_post_view()
    {
        $this->visit('/post')
            ->see('留言板');
    }

    public function test_post_create_view()
    {
        $this->visit('/post/create')
            ->see('新增留言');
    }
}
