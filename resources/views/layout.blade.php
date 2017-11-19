<!DOCTYPE html>
<html>
    <body>
        @if (Auth::check())
            <ul>
                <li>
                    <a href="/logout">Log out</a>
                </li>
            </ul>
        @endif
        @yield('body')
    </body>
</html>
