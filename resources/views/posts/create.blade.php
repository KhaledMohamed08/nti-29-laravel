@extends('layout.main')
@section('title', "Create Post")
@section('content')
    <form class="m-5" action="{{ route('posts.store') }}" method="POST">
        <input type="hidden" name="user_id" value="{{ random_int(1, 10) }}">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Post title*</label>
            <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Post title">
            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Post Content*</label>
            <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
            @error('content')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button class="btn btn-primary" type="submit">Create New Post</button>
        <a class="btn btn-secondary" href="{{ route('posts.index') }}">Cancel</a>
    </form>
@endsection
