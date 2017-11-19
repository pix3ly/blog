<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class IndexController extends Controller {
    public function index() {
        $posts = Post::orderBy('posted_on', 'DESC')->get();

        return view('index', [
            'posts' => $posts
        ]);
    }
}
