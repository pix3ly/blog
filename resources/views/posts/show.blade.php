@extends('layouts.general')

@section('body')
    <a class="post__back" href="/blogs/{{ $post->blog->id }}">Go back to '{{ $post->blog->title }}'</a>
    <h1 class="post__title">{{ $post->title }}</h1>
    <div class="post__body">{!! $post->body !!}</div>
    <p class="post__date">{{ date('F jS, Y', strtotime($post->date)) }} &middot; {{ $post->netVotes() }} rating</p>
@endsection
