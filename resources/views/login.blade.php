@extends('layouts.form')

@section('title', 'Login')

@section('content')
    <form method="POST">
        {{ csrf_field() }}
        <div class="troep">
            <label>E-mail</label>
            <input type="email" name="email" />
        </div>
        <div class="troep">
            <label>Password</label>
            <input type="password" name="password" />
        </div>
        <button>Log in</button>
    </form>
@endsection
