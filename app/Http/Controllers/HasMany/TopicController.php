<?php

namespace App\Http\Controllers\HasMany;

use App\Http\Controllers\Controller;
use App\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::orderBy('created_at', 'desc')->get();

        return view('topics.index', compact('topics'));
    }
    public function store(Request $request)
    {
        $topic = new Topic();
        $topic->title = 'Topic two';
        $topic->user()->associate($request->user());
        $topic->save();

        dd('topic was created');
    }

    public function show(Topic $topic)
    {
        return view('topics.show', compact('topic'));
    }
}
