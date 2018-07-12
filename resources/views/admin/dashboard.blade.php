@extends('layouts.backend')

@section('content')
    <div class="wrapper">
        <a href="/admin/posts/create">Create</a>
        <ul>
            @foreach ($posts as $post)
                <li class="row row--divide">
                    <div class="row__column row__column--compact">
                        <div>{{ $post->title }}</div>
                        <ul class="tags">
                            @foreach ($post->tags()->pluck('name')->all() as $tag)
                                <li>{{ $tag }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="row__column row__column--compact">{{ $post->posted_on }}</div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
