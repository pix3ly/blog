@extends('layouts.backend')

@section('content')
    <form method="POST">
        {{ csrf_field() }}
        <div class="troep">
            <label>Password</label>
            <input type="text" name="password" value="{{ $password }}" />
        </div>
        <button>Submit</button>
    </form>
@endsection