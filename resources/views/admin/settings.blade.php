@extends('layouts.backend')

@section('title', 'Admin - Settings')

@section('content')
    <h2 class="mb-1">Security</h2>
    <form method="POST">
        {{ csrf_field() }}
        <ul class="troep">
            <li>
                <input type="radio" id="securityTypePublic" name="security_type" value="public" {{ $security_type == 'public' || $security_type == '' ? 'checked' : '' }} />
                <label for="securityTypePublic">Public</label>
            </li>
            <li>
                <input type="radio" id="securityTypePassword" name="security_type" value="password" {{ $security_type == 'password' ? 'checked' : '' }} />
                <label for="securityTypePassword">Password</label>
                <input class="mt-1" type="text" name="security_password" value="{{ $security_password }}" />
            </li>
        </ul>
        <button>Submit</button>
    </form>
    <h2 class="mt-5 mb-1">Users</h2>
    <div class="card">
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
