<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Parsedown;

class PostController extends Controller {
    public function show($id) {
        $parsedown = new Parsedown();

        return view('posts.show', [
            'post' => Post::find($id),
            'parsedown' => $parsedown
        ]);
    }
}
