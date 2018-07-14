<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Parsedown;

class PostController extends Controller {
    public function show($slug) {
        $post = Post::where('slug', $slug)->first();

        if (!$post) {
            return 'NOTHING';
        }

        $parsedown = new Parsedown();

        return view('posts.show', [
            'post' => $post,
            'parsedown' => $parsedown
        ]);
    }
}
