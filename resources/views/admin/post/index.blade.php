@extends('layouts.admin')

@section('content')
    <div>
        <div>
            <a href="{{route('post.create') }}" class="btn btn-primary"> Add new column</a>
        </div>
        @foreach($posts as $post)
            <div><a href="{{route('post.show', $post->id) }}"> {{$post->id}}. {{$post->title}} </a></div>
        @endforeach

        <div class="mt-3">
            {{--            {{ $posts->links() }}--}}
            {{ $posts->withQueryString()->links() }}

            {{--    {{ $posts->links('vendor.pagination.tailwind') }}--}}

            {{--            {{ $posts->links() }}--}}

            {{--        {{$posts->links('vendor.pagination.default')}}--}}
        </div>
    </div>
@endsection