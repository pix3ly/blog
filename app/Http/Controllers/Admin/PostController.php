<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;

class PostController extends Controller {
    public function create() {
        return view('admin.posts.create');
    }

    public function store(Request $request) {
        // TODO VALIDATE

        $post = new Post;

        $post->user_id = 1;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->posted_on = date('Y-m-d H:i:s');

        $post->save();

        return redirect()->route('posts.show', ['id' => $post->id]);
    }
}
