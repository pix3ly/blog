@extends('layouts.frontend')

@section('content')
    <form method="POST" action="/posts">
        {{ csrf_field() }}
        <label>Title</label>
        <input type="text" name="title" />
        <label>Body</label>
        <TextEditor></TextEditor>
        <button>Create</button>
    </form>
@endsection
