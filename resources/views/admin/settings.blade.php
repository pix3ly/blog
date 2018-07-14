@extends('layouts.backend')

@section('title', 'Admin - Settings')

@section('content')
    <form method="POST">
        {{ csrf_field() }}
        <div class="troep">
            <label>Password</label>
            <input type="text" name="password" value="{{ $password }}" />
        </div>
        <button>Submit</button>
    </form>
    <div class="card mt-1">
        <div class="card__header">Administrators</div>
        <ul class="list list--flush">
            @foreach ($administrators as $administrator)
                <li class="row row--divide">
                    <div class="row__column row__column--compact">{{ $administrator->email }}</div>
                    <div class="row__column row__column--compact">{{ ucfirst($administrator->role) }}</div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
