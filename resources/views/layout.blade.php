<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/app.css" />
    </head>
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
