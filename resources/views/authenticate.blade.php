@extends('layouts.form')

@section('title', 'Authenticate')

@section('content')
    <form method="POST">
        {{ csrf_field() }}
        <div class="troep">
            <label>Password</label>
            <input type="password" name="password" />
        </div>
        <button>Submit</button>
    </form>
@endsection
