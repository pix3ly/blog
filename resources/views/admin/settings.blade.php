@extends('layouts.backend')

@section('content')
    <form method="POST">
        {{ csrf_field() }}
        <label>Password</label>
        <input type="text" name="password" value="{{ $password }}" />
        <button>Submit</button>
    </form>
@endsection
