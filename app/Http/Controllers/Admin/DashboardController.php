<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;

class DashboardController extends Controller {
    public function __invoke() {
        $posts = Post::orderBy('created_at', 'DESC')->get();

        return view('admin.dashboard', compact('posts'));
    }
}
