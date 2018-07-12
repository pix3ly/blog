@extends('layouts.core')

@section('body')
    <ul class="wrapper">
        <li>
            <a href="/admin/dashboard">Dashboard</a>
        </li>
        <li>
            <a href="/admin/tags">Tags</a>
        </li>
    </ul>
    <div class="wrapper">
        @yield('content')
    </div>
@endsection
