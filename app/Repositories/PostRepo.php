<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepo
{
    public function index()
    {
        return Post::orderBy('id', 'desc')->paginate(10);
    }

    public function create($data)
    {
        return Post::create($data);
    }

    public function getById($id)
    {
        return Post::find($id);
    }
}