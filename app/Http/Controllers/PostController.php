<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth:api']);
    }

    public function index()
    {
        return PostResource::collection(Post::with('user')->where('user_id', auth()->user()->id)->paginate(10));
    }

    public function store(Request $request)
    {
        return $request->user()->posts()->create($request->only(['body']));
    }

    public function delete(Request $request, Post $post)
    {
        return $request->user()->posts()->delete($post);
    }
}
