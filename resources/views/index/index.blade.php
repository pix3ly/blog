@extends('layouts.general')

@section('body')
    <ul class="posts">
        @foreach ($posts as $post)
            <li>
                <h1 class="spacing__bottom-regular">{{ $post->title }}</h1>
                <div class="post__body">{!! $post->body !!}</div>
                <a class="spacing__top-regular post__continue" href="/posts/{{ $post->id }}">Continue</a>
            </li>
        @endforeach
    </ul>
@endsection
