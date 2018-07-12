@extends('layouts.core')

@section('body')
    <ul class="wrapper">
        <li>
            <a href="/admin/dashboard"><i class="fal fa-home"></i> Dashboard</a>
        </li>
        <li>
            <a href="/admin/tags"><i class="fal fa-tag"></i> Tags</a>
        </li>
        <li>
            <a href="/admin/settings"><i class="fal fa-cog"></i> Settings</a>
        </li>
    </ul>
    <div class="wrapper">
        @yield('content')
    </div>
@endsection
