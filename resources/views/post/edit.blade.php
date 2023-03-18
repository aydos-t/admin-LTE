@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('post.update', $post->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Title"
                       value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" name="content" id="content"
                          placeholder="Content">{{$post->content}}" </textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" class="form-control" name="image" id="image" value="{{$post->image}}"
                       placeholder="Image">
            </div>
            <br>
            Category
            <div>
                <select class="form-control" id="category" name="category_id">
                    @foreach($categories as $category)
                        <option
                                {{ $category->id === $post->category->id ? ' selected' : ''}}
                                value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tags">Tags</label>
                <select multiple class="form-control" id="tags" name="tags[]">
                    @foreach($tags as $tag)
                        <option
                                @foreach ($post->tags as $postTag)
                                    {{ $tag->id === $postTag->id ? ' selected' : ''}}
                                @endforeach
                                value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                </select>
            </div>
            <hr>
            <button type="submit" class=" btn btn-primary">Update</button>
        </form>
    </div>
@endsection