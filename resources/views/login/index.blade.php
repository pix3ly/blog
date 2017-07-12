@extends('layouts.general')

@section('body')
    <h1 class="form__title">Login</h1>
    <form method="POST">
        {{ csrf_field() }}
        <label>E-mail</label>
        <input type="email" name="email" />
        <label>Password</label>
        <input type="password" name="password" />
        <input type="submit" value="Login" />
    </form>
@endsection
