@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Вы вошли в систему!') }}

                            <br/>

                        <a class="nav-link active bg-blue" aria-current="page" href="{{route('post.index')}}">Чтобы
                            увидеть посты нажми сюда "Post"</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection