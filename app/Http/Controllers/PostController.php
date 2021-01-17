<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Jobs\DeletePost;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth:api']);
    }

    public function index()
    {
        return PostResource::collection(Post::where('user_id', auth()->user()->id)->get());
    }

    public function store(Request $request)
    {
        if (!$request->minutes === 0) {

            $expires = Carbon::now()->addMinutes($request->minutes);
            return $request->user()->posts()->create(array_merge($request->only(['body', 'minutes']), ['expires_on' => $expires]));
        }
        return $request->user()->posts()->create($request->only(['body', 'minutes']));
    }

    public function delete($id)
    {
        // $post 
        $post = Post::findOrFail($id);
        $post->delete();

        return response()->json(null, 204);
    }
}
