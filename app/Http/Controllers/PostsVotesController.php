<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vote;

class PostsVotesController extends Controller {
    public function store(Request $request, $post_id) {
        $user_id = 1;

        if (!Vote::where([
            ['user_id', '=', $user_id],
            ['post_id', '=', $post_id]
        ])->get()->count()) {
            $direction = $request->input('direction');

            Vote::insert([
                'user_id' => $user_id,
                'post_id' => $post_id,
                'direction' => $direction
            ]);
        }

        return redirect('/posts/' . $post_id);
    }
}
