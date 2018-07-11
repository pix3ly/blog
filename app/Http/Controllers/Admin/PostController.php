<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;
use App\Tag;

class PostController extends Controller {
    public function create() {
        $tags = Tag::all();

        return view('admin.posts.create', compact('tags'));
    }

    public function store(Request $request) {
        // TODO VALIDATE

        $post = new Post;

        $post->user_id = 1;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->posted_on = date('Y-m-d H:i:s');

        $post->save();

        $post->tags()->sync($request->input('tags'));

        return redirect()->route('posts.show', ['id' => $post->id]);
    }
}
