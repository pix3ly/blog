<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller {
    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $post = new Post;

        $post->user_id = \Auth::user()->id;
        $post->posted_on = date('Y-m-d H:i:s');
        $post->title = $request->input('title');
        $post->body = $request->input('body');

        $post->save();

        return redirect()->route('posts.show', $post->id);
    }

    public function show($id) {
        return view('posts.show', [
            'post' => Post::find($id)
        ]);
    }
}
