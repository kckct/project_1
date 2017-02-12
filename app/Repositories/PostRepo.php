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
        return Post::findOrFail($id);
    }

    public function update($id, $data)
    {
        return $this->getById($id)->update($data);
    }
}