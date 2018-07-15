@extends('layouts.backend')

@section('title', 'Admin - Edit Tag')

@section('content')
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
