<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Post::all();
        // $posts->load(['user']);
        $posts = Post::where('is_active', true)->with('user')->get();
        // dd($posts[0]);
        // return view('posts.index', ['posts' => $posts]);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePostRequest $request)
    {
        $data = $request->validated();
        // $data = $request->all();
        // $data = $request->validate([
        //     'user_id' => 'required|numeric',
        //     'title' => 'required|string|max:300',
        //     'content' => ['required', 'string'],
        // ], [
        //     'title.required' => 'Type Title Ya Stupide'
        // ]);

        Post::create($data);

        return redirect()->route('posts.index')->with('success', 'Post Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // $post = Post::where('id', $post)->with('user')->first();
        // $post = Post::find($post);
        
        if (!$post) {
            return redirect('/posts');
        }

        // $post->load('user');

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        // $post = Post::find($post);

        return view('posts.edit', compact('post'));
        // return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = $request->validated();
        // $data = $request->all();
        $post->update($data);

        return redirect()->route('posts.show', $post->id)->with('success', 'Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post Deleted Successfully');
    }
}
