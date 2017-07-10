@extends('layouts.general')

@section('body')
    <h1>{{ $blog->title }}</h1>
    <ul class="blog__posts">
        @foreach ($blog->posts as $post)
            <li class="posts__post">
                <h2 class="post__title">{{ $post->title }}</h2>
                <div class="post__body">{!! str_limit($post->body, 240) !!}</div>
                <a class="post__continue" href="/posts/{{ $post->id }}">Continue</a>
            </li>
        @endforeach
    </ul>
@endsection
