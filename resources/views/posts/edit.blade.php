@extends('layout.main')
@section('title', "Edit Post")
@section('content')
    <form class="m-5" action="{{ route('posts.update', $post->id) }}" method="POST">
        @method('PUT')
        {{-- <input type="hidden" name="user_id" value="{{ $post->user_id }}"> --}}
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Post title</label>
            <input type="text" class="form-control" name="title" value="{{ $post->title }}" id="exampleFormControlInput1"
                placeholder="Post title">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Post Content</label>
            <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3">{{ $post->content }}</textarea>
        </div>
        <button class="btn btn-primary" type="submit">Update Post</button>
        <a class="btn btn-secondary" href="{{ route('posts.show', $post->id) }}">Cancel</a>
    </form>
@endsection
