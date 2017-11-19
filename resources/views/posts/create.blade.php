@extends('layout')

@section('body')
    <form method="POST" action="/posts">
        {{ csrf_field() }}
        <label>Title</label>
        <input type="text" name="title" />
        <label>Body</label>
        <textarea name="body"></textarea>
        <button>Create</button>
    </form>
@endsection
