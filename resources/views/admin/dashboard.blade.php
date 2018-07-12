@extends('layouts.backend')

@section('content')
    <div class="wrapper">
        <div class="card">
            <div class="card__header row row--divide">
                <div class="row__column row__column--compact">Posts</div>
                <div class="row__column row__column--compact">
                    <a href="/admin/posts/create">Create</a>
                </div>
            </div>
            <ul class="list list--flush">
                @foreach ($posts as $post)
                    <li class="row row--divide">
                        <div class="row__column row__column--compact">
                            <div>{{ $post->title }}</div>
                            <ul class="tags mt-1">
                                @foreach ($post->tags()->pluck('name')->all() as $tag)
                                    <li>{{ $tag }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="row__column row__column--compact">{{ $post->posted_on }}</div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
