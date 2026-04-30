@extends('layouts.main')
@section('content')
    <div class="post m-5">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        <span class="d-block fw-bold">{{ $post->user->name }}</span>
        <span>{{ date('l jS \o\f F Y h:i:s A', strtotime($post->created_at)) }}</span>
    </div>
    <div class="actions my-3">
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success btn-sm">Edit</a>
        {{-- <a href="#" class="btn btn-danger btn-sm">Delete</a> --}}
        <form class="d-inline" action="{{ route('posts.destroy', $post->id) }}" method="POST">
            @method('DELETE')
            <button onclick="return confirm('Are You Sure?!!!')" type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
    </div>
    {{-- <a href="{{ url('/posts') }}" class="btn btn-primary">Go to Posts</a> --}}
    <a href="{{ route('posts.index') }}" class="btn btn-primary">Show Full Post</a>
@endsection
