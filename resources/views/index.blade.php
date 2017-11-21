@extends('layout')

@section('body')
    <ul class="posts">
        @foreach ($posts as $post)
            <li>
                <p class="spacing-bottom-small">{{ $post->timeDifference }}</p>
                <h2>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h2>
            </li>
        @endforeach
    </ul>
@endsection
