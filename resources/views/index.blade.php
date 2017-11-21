@extends('layout')

@section('body')
    <ul>
        @foreach ($posts as $post)
            <li>
                <p class="spacing-bottom-small">PLACEHOLDER days ago</p>
                <h1>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h1>
            </li>
        @endforeach
    </ul>
@endsection
