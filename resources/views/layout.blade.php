<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:700,700i" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i" />
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
            <div class="wrapper">
                @yield('body')
            </div>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
