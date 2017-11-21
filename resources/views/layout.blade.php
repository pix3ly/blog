<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:700,700i" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:400,400i" />
        <link rel="stylesheet" href="/css/app.css" />
    </head>
    <body>
        <div id="app">
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
            <div class="wrapper">
                @yield('body')
            </div>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
