@extends('layouts.backend')

@section('title', 'Admin - Edit Tag')

@section('content')
    <div class="row row--divide mb-2">
        <div class="row__column row__column--compact">
            <a class="btn btn--gray" href="/admin/tags">Go back</a>
        </div>
        <div class="row__column row__column--compact">
            <form method="POST" action="/admin/tags/{{ $tag->id }}">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button class="btn btn--red">Delete</button>
            </form>
        </div>
    </div>
    <form method="POST" action="/admin/tags/{{ $tag->id }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <div class="troep">
            <label>Name</label>
            <input type="text" name="name" value="{{ $tag->name }}" />
        </div>
        <div class="troep">
            <label>Slug</label>
            <input type="text" name="slug" value="{{ $tag->slug }}" />
        </div>
        <button>Submit</button>
    </form>
@endsection
