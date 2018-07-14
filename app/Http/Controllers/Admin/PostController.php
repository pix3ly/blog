<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;
use App\Tag;
use Auth;

class PostController extends Controller {
    public function create() {
        $tags = Tag::all();

        return view('admin.posts.create', compact('tags'));
    }

    public function store(Request $request) {
        // TODO VALIDATE

        $post = new Post;

        $post->user_id = Auth::user()->id;
        $post->title = $request->input('title');
        $post->slug = str_slug($post->title, '-');
        $post->body = $request->input('body');
        $post->created_at = date('Y-m-d H:i:s');

        $post->save();

        $post->tags()->sync($request->input('tags'));

        return redirect()->route('posts.show', ['slug' => $post->slug]);
    }
}
