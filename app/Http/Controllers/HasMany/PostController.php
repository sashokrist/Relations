<?php

namespace App\Http\Controllers\HasMany;

use App\Http\Controllers\Controller;
use App\Post;
use App\Topic;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $topic = Topic::find(1);

        $post = new Post();
        $post->body = 'Replay two';
        $post->user()->associate($request->user());
        $post->topics()->associate($topic);
        $post->save();

        dd('topic was created');

    }
}
