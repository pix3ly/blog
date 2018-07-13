@extends('layouts.backend')

@section('content')
    <div class="wrapper">
        <div class="card">
            <div class="card__header row row--divide">
                <div class="row__column row__column--compact">Tags</div>
                <div class="row__column row__column--compact">
                    <a class="btn btn--green" href="/admin/tags/create">Create</a>
                </div>
            </div>
            <ul class="list list--flush">
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
    </div>
@endsection
