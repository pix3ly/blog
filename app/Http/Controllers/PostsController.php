<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Parsedown;

class PostsController extends Controller {
    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $post = new Post;

        $post->user_id = \Auth::user()->id;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->created_at = date('Y-m-d H:i:s');

        $post->save();

        return redirect()->route('posts.show', $post->id);
    }

    public function show($id) {
        $parsedown = new Parsedown();

        return view('posts.show', [
            'post' => Post::find($id),
            'parsedown' => $parsedown
        ]);
    }
}
