@extends('layout')

@section('body')
    <h1>{{ $post->title }}</h1>
    <p>By {{ $post->user->name }}</p>
    <p>{{ date('F jS, Y', strtotime($post->posted_on)) }}</p>
    <div>{!! $post->body !!}</div>
    <ul>
        @foreach ($post->tags as $tag)
            <li>{{ $tag->name }}</li>
        @endforeach
    </ul>
@endsection
