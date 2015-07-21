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

        <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        @yield('js')
    </body>
</html>