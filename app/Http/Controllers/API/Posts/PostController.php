<?php

namespace App\Http\Controllers\API\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::where('is_active', true)->with('user')->orderBy('created_at', 'desc')->get();

        return response()->json([
            'status' => 'success',
            'message' => 'posts retrived successfully',
            'data' => PostResource::collection($posts),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePostRequest $request)
    {
        $data = $request->validated();

        $data['user_id'] = 1;
        $post = Post::create($data);

        return response()->json([
            'status' => 'success',
            'message' => 'posts created successfully',
            'data' => new PostResource($post),
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return response()->json([
            'status' => 'success',
            'message' => 'post retrived successfully',
            'data' => new PostResource($post),
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => 'sometimes',
            'content' => 'sometimes'
        ]);

        $post->update($data);

        return response()->json([
            'status' => 'success',
            'message' => 'post updated successfully',
            'data' => new PostResource($post),
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'post Deleted successfully',
            'data' => new PostResource($post),
        ], 200);
    }
}
