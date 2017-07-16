@extends('layouts.general')

@section('body')
    <ul>
        @foreach ($posts as $post)
            <li>
                <h1>{{ $post->title }}</h1>
                {!! $post->body !!}
                <a href="/posts/{{ $post->id }}">Continue</a>
            </li>
        @endforeach
    </ul>
@endsection
