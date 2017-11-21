@extends('layout')

@section('body')
    <h1 class="spacing-bottom-small">{{ $post->title }}</h1>
    <div>{{ date('F jS, Y', strtotime($post->posted_on)) }} &middot; By {{ $post->user->name }}</div>
    <div class="seperator"></div>
    <div class="body">{!! $post->body !!}</div>
@endsection
