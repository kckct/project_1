<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepo
{
    public function list()
    {
        return Post::paginate(10);
    }

    public function create($data)
    {
        return Post::create($data);
    }
}