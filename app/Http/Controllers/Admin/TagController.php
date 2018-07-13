<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Tag;

class TagController extends Controller {
    public function index() {
        $tags = Tag::all();

        return view('admin.tags.index', compact('tags'));
    }

    public function create() {
        return view('admin.tags.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|unique:tags|max:255'
        ]);

        $tag = new Tag;

        $tag->name = $request->input('name');

        $tag->save();

        return redirect()->route('admin.tags.index');
    }

    public function edit($id) {
        $tag = Tag::find($id);

        return view('admin.tags.edit', compact('tag'));
    }

    public function update(Request $request, $id) {
        $tag = Tag::find($id);

        // TODO VALIDATE

        $tag->name = $request->input('name');

        $tag->save();

        return redirect()->route('admin.tags.index');
    }
}
