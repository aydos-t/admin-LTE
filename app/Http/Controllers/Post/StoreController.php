<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\StoreRequest;

class StoreController extends BaseController
{
    public function store(StoreRequest $request)
    {
        $data = request() -> validated();


        $this -> service -> store($data);


        return redirect() -> route('post.index');
    }
}