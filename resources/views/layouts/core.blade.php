<!DOCTYPE html>
<html>
    <head>
        <script defer src="/storage/fontawesome/all.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:700,700i" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:400,400i,700" />
        <link rel="stylesheet" href="/css/app.css" />
        <link rel="stylesheet" href="//cdn.jsdelivr.net/editor/0.1.0/editor.css" />
        <script src="//cdn.jsdelivr.net/editor/0.1.0/editor.js"></script>
        <script src="//cdn.jsdelivr.net/editor/0.1.0/marked.js"></script>
    </head>
    <body>
        <div id="app">
            @yield('body')
        </div>
        <script src="/js/app.js"></script>
        @yield('scripts')
    </body>
</html>
