<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;

class UpdateController extends BaseController
{
    public function update(UpdateRequest $request, Post $post)
    {
        $data = request()->validated();

        $this->service->update($post, $data);

        return redirect()->route('post.show', $post->id);

//    $post = Post::find(2);
//    $post->update([
//        'image' => 'image.jpg',
//        'likes' => '23',
//        'is_published' => 2,
//    ]);
//    dd('updated');
    }
}
