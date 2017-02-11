<?php

use App\Repositories\PostRepo;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostUnitTest extends TestCase
{
    use DatabaseMigrations;

    public function test_index_no_data()
    {
        $repo = new PostRepo;
        $data = $repo->index();
        $this->assertEquals(0, count($data));
    }

    public function test_index_one_data()
    {
        factory(\App\Models\Post::class, 1)->create();

        $repo = new PostRepo;
        $data = $repo->index();
        $this->assertEquals(1, count($data));
    }

    public function test_create_data()
    {
        $input = [
            'title' => 'title',
            'message' => 'message',
            'user_id' => 1,
        ];

        $repo = new PostRepo;
        $data = $repo->create($input);
        $this->assertEquals(1, count($data));
    }
}
