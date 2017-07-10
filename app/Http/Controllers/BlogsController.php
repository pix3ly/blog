<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;

class BlogsController extends Controller {
    public function show($id) {
        return view('blogs.show', [
            'blog' => Blog::find($id)
        ]);
    }
}
