@extends('layout')

@section('body')
    <h1 class="spacing-bottom-medium text-align-center">{{ $post->title }}</h1>
    <div class="text-align-center">{{ date('F jS, Y H:i', strtotime($post->posted_on)) }} &middot; By {{ $post->user->name }}</div>
    <div class="seperator"></div>
    <div class="body">{!! $post->body !!}</div>
@endsection
