@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('post.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="id"></label>
                <input type="number" class="form-control" name="id" id="id" placeholder="Id">
            </div>
            <div class="form-group">
                <label for="title"></label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Title">
            </div>
            <div class="Content">
                <label for="content"></label>
                <textarea class="form-control" name="content" id="content" placeholder="Content"></textarea>
            </div>
            <div class="form-group">
                <label for="image"></label>
                <input type="text" class="form-control" name="image" id="image" placeholder="Image">
            </div>

            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" id="category" name="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tags">Tags</label>
                <select multiple class="form-control" id="tags" name="tags[]">
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                </select>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection