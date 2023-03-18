<?php

namespace App\Http\Controllers\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class CreateController extends BaseController
{
    public function create()
    {
        $categories = Category::All();
        $tags = Tag::All();
        return view('post.create', compact('categories', 'tags'));
    }
}