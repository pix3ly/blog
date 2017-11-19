<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Muli:300,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:300" rel="stylesheet">
        <link rel="stylesheet" href="/style.css" />
    </head>
    <body>
        @if (Auth::check())
            <ul>
                <li>
                    <a href="/logout">Log out</a>
                </li>
            </ul>
        @endif
        <div class="body">
            @yield('body')
        </div>
    </body>
</html>
