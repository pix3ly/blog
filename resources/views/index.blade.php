@extends('layout')

@section('body')
    <ul>
        @foreach ($posts as $post)
            <li>
                <h1>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h1>
                <p>By {{ $post->user->name }}</p>
                <p>{{ date('F jS, Y', strtotime($post->posted_on)) }}</p>
            </li>
        @endforeach
    </ul>
@endsection
