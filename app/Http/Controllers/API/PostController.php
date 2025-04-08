<?php

namespace App\Http\Controllers\API;

use App\Events\PostCreated;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Log;


class PostController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(Post::paginate(10));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        $post = Post::create($request->only(['title', 'content']));

        // Trigger event
        event(new PostCreated($post));

        return response()->json($post, 201);
    }
}
