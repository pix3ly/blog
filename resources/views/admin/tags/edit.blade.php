@extends('layouts.backend')

@section('content')
    <form method="POST" action="/admin/tags/{{ $tag->id }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <label>Name</label>
        <input type="text" name="name" value="{{ $tag->name }}" />
        <button>Submit</button>
    </form>
@endsection
