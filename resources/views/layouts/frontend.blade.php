@extends('layouts.core')

@section('body')
    @if (Auth::check())
        <div class="navigation">
            <div class="wrapper">
                <ul>
                    <li>
                        <a href="/logout">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    @endif
    <div class="navigation">
        <div class="wrapper">
            <h3>
                <a href="/">Blog</a>
            </h3>
        </div>
    </div>
    <div class="wrapper">
        @yield('content')
    </div>
    <div class="wrapper" style="text-align: center;">Powered by <a href="https://github.com/range-of-motion/blog" target="_blank">Blog</a> &middot; <a href="/admin">Admin</a></div>
@endsection
