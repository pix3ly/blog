<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Carbon\Carbon;

class IndexController extends Controller {
    public function index() {
        $posts = Post::orderBy('posted_on', 'DESC')->get();

        foreach ($posts as $post) {
            $post->timeDifference = Carbon::parse($post->posted_on)->diffForHumans();
        }

        return view('index', [
            'posts' => $posts
        ]);
    }
}
