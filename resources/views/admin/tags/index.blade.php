@extends('layouts.backend')

@section('content')
    <div class="wrapper">
        <ul class="list">
            @foreach ($tags as $tag)
                <li class="row row--divide">
                    <div class="row__column row__column--compact" style="display: flex; align-items: middle;">{{ $tag->name }} ({{ $tag->posts->count() }})</div>
                    <div class="row__column row__column--compact">
                        <a class="btn btn--gray" href="/admin/tags/{{ $tag->id }}/edit">Edit</a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
