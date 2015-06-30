<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Prueba</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @yield('head')
    </head>

    <body>
        <div class="container">
            @yield('body')
        </div>

        <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
        @yield('js')
    </body>
</html>