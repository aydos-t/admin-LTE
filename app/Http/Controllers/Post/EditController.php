<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class EditController extends BaseController
{
    public function edit(Post $post)
    {
        $categories = Category::All();
        $tags = Tag::All();
        return view('post.edit', compact('post', 'categories', 'tags'));
    }
}
