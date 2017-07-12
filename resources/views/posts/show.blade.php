@extends('layouts.general')

@section('body')
    <a class="post__back" href="/blogs/{{ $post->blog->id }}">Go back to '{{ $post->blog->title }}'</a>
    <div class="row">
        <div class="row__column row__column--align-center row__column--align-middle">
            <div class="post__rating">
                <form method="POST" action="/posts/{{ $post->id }}/votes">
                    {{ csrf_field() }}
                    <input type="hidden" name="direction" value="1" />
                    <input type="submit" value="+" />
                </form>
                <h2 class="rating__net">{{ $post->netVotes() }}</h2>
                <form method="POST" action="/posts/{{ $post->id }}/votes">
                    {{ csrf_field() }}
                    <input type="hidden" name="direction" value="-1" />
                    <input type="submit" value="-" />
                </form>
            </div>
        </div>
        <div class="row__column">
            <h1 class="post__title">{{ $post->title }}</h1>
        </div>
    </div>
    <div class="post__body">{!! $post->body !!}</div>
    <p class="post__date">{{ date('F jS, Y', strtotime($post->date)) }}</p>
@endsection
