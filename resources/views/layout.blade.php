<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:700,700i" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:400,400i,700" />
        <link rel="stylesheet" href="/css/app.css" />
    </head>
    <body>
        <div id="app">
            @if (Auth::check())
                <div class="navigation">
                    <div class="wrapper">
                        <div class="row">
                            <ul class="column">
                                <li>
                                    <a href="/logout">Log out</a>
                                </li>
                            </ul>
                            <div class="column text-align-right">
                                <a href="/posts/create" class="button">Create</a>
                            </div>
                        </div>
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
                @yield('body')
            </div>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
