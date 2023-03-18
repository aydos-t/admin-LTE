<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;


class IndexController extends BaseController
{
    public function index(FilterRequest $request)
    {
//        $this->authorize('view', auth()->user());
        $data = $request->validated();

        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $posts = Post::filter($filter)->paginate(10);
        return view('post.index', compact('posts'));

        /* PAGINATION starts */
//        $posts = Post::paginate(10);

//        $posts = Post::with(['title', 'content', 'image', 'likes', 'is_published', 'category_id'])->when(request()->posts, function($query, $posts) {
//            $query->withPosts($posts);
//        })->latest()->paginate(request()->has('posts') ? 2 : 3);

//        return $posts = Post::select('id', 'title', 'content', 'image', 'likes', 'is_published', 'category_id')->paginate(10);

//        return view('post.index', [
//            'posts' => DB::table('posts')->paginate(15)
//        ]);

//        $posts = DB::table('posts')->simplePaginate(15);
        /* PAGINATION ends */

    }
}