<?php

namespace App\Http\Controllers;

use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class PostController extends Controller
{


    public function __invoke(/*FilterRequest $request*/)
    {
//        $data = $request->validated();
//
//        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
//        $posts = Post::filter($filter)->paginate(10);
//        return view('post.index', compact('posts'));

//        $category = Category::find(1);
//        $tag = Tag::find(1);
//        dd($tag->posts);
//        $post = Post::find(1);
//        dd($post->category);

//        $post = Post::find(2);
//        dd($post->tags);
//        $tag = Tag::find(1);
//        dd($tag->posts);

    }

//    public function create()
//    {
//        $categories = Category::All();
//        $tags = Tag::All();
//        return view('post.create', compact('categories', 'tags'));
//    }
//
//    public function store()
//    {
//        $data = request()->validate([
//            'title' => 'string',
//            'content' => 'string',
//            'image' => 'string',
//            'category_id' => '',
//            'tags' => '',
//        ]);
//        $tags = $data['tags'];
//        unset($data['tags']);
//
//        $post = Post::create($data);
//
//        $post->tags()->attach($tags);
//
//        return redirect()->route('post.index');
//    }
//
//    public function show(/*$id*/ Post $post)
//    {
//
//        return view('post.show', compact('post'));
//
////неиспользуемая версия        $post = Post::findOrFail($id);
////        dd($post->title);
//    }
//
//    public function edit(Post $post)
//    {
//        $categories = Category::All();
//        $tags = Tag::All();
//        return view('post.edit', compact('post', 'categories', 'tags'));
//    }
//
//
//    public function update(Post $post)
//    {
//        $data = request()->validate([
//            'title' => 'string',
//            'content' => 'string',
//            'image' => 'string',
//            'category_id' => '',
//            'tags' => '',
//        ]);
//        $tags = $data['tags'];
//        unset($data['tags']);
//
//        $post->update($data);
//        $post->tags()->sync($tags);
//        return redirect()->route('post.show', $post->id);
//    $post = Post::find(2);
//    $post->update([
//        'image' => 'image.jpg',
//        'likes' => '23',
//        'is_published' => 2,
//    ]);
//    dd('updated');
//    }

//    public function destroy(Post $post)
//    {
//        $post->delete();
//        return redirect()->route('post.index');
//    }

    /*public
    function delete()
    {
        $post = Post::find(2);      //Удаление
        $post->delete();
        dd('deleted');

        $post = Post::withTrashed()->find(2); // Восстановление
        $post->restore();
        dd('restored');
    }*/


    /*
        Если есть такая то информация то выйдет на экран, а если его нет то создаётся в БД значение внутри свойства $anotherPost
    */
//    public function firstOrCreate()
//    {
//        $anotherPost = [
//            'title' => 'some GM закрыл свой завод',
//            'content' => 'some GM...',
//            'image' => 'some gm-car.jpg',
//            'likes' => '5000',
//            'is_published' => 99,
//        ];
//
//        $post = Post::firstOrCreate([
//            'title' => 'second-title'         //Проверяет
//        ], [
//            'title' => 'second-title',
//            'content' => 'some GM...',
//            'image' => 'some gm-car.jpg',
//            'likes' => '5000',
//            'is_published' => 99,
//        ]);
//        dump($post->content);
//        dd('finished');
//    }
//}
//    public function updateOrCreate()
//    {
//        $anotherPost = [
//            'title' => 'Football news',
//            'content' => 'updateorcreate some content',
//            'image' => 'updateorcreate some gm-car.jpg',
//            'likes' => '500',
//            'is_published' => 1,
//        ];
//
//        $post = Post::updateOrCreate([
//            'title' => 'Football news top'
//        ], [
//            'title' => 'basketball news',
//            'content' => 'updateorcreate some content',
//            'image' => 'updateorcreate some gm-car.jpg',
//            'likes' => '500',
//            'is_published' => 1,
//        ]);
//        dump($post->content);
//        dd('finished');
//    }

//        $post = Post::where('is_published', 1)->first();
}

//        dump($post->title);
//
//
//        //        foreach ($posts as $post) {
//        //      dump($post->title);
////        }
//        dd('end');
//
//        //dd($posts);
//        //$str = 'blablafaf';
//        //dd($str);
//        //        var_dump($str);
//}
//
