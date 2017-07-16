@extends('layouts.general')

@section('body')
    <h1>{{ $post->title }}</h1>
    {!! $post->body !!}
    <p>{{ date('F jS, Y', strtotime($post->date)) }}</p>
@endsection
