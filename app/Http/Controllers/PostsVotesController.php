<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsVotesController extends Controller {
    public function store(Request $request, $postId) {
        $direction = $request->input('direction');

        \App\Vote::insert([
            'user_id' => 1,
            'post_id' => $postId,
            'direction' => $direction
        ]);

        return redirect('/posts/' . $postId);
    }
}
