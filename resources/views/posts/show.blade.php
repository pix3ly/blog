@extends('layout')

@section('body')
    <h1 class="spacing__bottom-regular">{{ $post->title }}</h1>
    <p>By {{ $post->user->name }}</p>
    <div class="post__body">{!! $post->body !!}</div>
    <p class="spacing__top-regular post__datestamp">{{ date('F jS, Y', strtotime($post->posted_on)) }}</p>
@endsection
