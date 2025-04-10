<?php

namespace App\Http\Controllers\API;

use App\Events\PostCreated;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Log;


class PostController extends Controller
{
    /**
     * To Show post
     */
    public function index(Request $request)
    {
        return response()->json(Post::paginate(10));
    }


    /**
     * To Store post
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        $post = Post::create($request->only(['title', 'content']));

        PostCreated::dispatch($post);

        return response()->json($post, 201);
    }
}
