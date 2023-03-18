<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class ShowController extends BaseController
{
    public function show(/*$id*/ Post $post)
    {
        return view('post.show', compact('post'));

//неиспользуемая версия        $post = Post::findOrFail($id);
//        dd($post->title);
    }
}
