@extends('layouts.backend')

@section('content')
    <div class="wrapper">
        <ul class="list">
            @foreach ($tags as $tag)
                <li>{{ $tag->name }} ({{ $tag->posts->count() }})</li>
            @endforeach
        </ul>
    </div>
@endsection
