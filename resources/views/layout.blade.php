<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/app.css" />
    </head>
    <body>
        <div id="app">
            @if (Auth::check())
                <ul>
                    <li>
                        <a href="/logout">Log out</a>
                    </li>
                </ul>
            @endif
            @yield('body')
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
