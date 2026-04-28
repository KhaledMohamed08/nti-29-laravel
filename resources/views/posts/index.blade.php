@extends('layout.main')
@section('content')
    <a href="{{ route('posts.create') }}" class="btn btn-primary mt-3">Create New Post</a>

    <div class="posts-card my-3">
        @foreach ($posts as $post)
            <div class="card my-3">
                <div class="card-header">
                    {{ $post->user->name }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ substr($post->content, 0, 100) . ' .....' }}</p>
                    {{-- <a href="{{ url('/posts/' . $post->id) }}" class="btn btn-primary">Show Full Post</a> --}}
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Show Full Post</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
