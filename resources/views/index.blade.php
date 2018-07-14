@extends('layouts.frontend')

@section('content')
    <ul class="posts">
        @foreach ($posts as $post)
            <li>
                <p class="spacing-bottom-small">{{ $post->timeDifference }}</p>
                <h2>
                    <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                </h2>
                <ul class="tags pt-20">
                    @foreach ($post->tags as $tag)
                        <li>{{ $tag->name }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection
