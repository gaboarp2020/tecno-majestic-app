<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Tecnomajestic | title</title>

        <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
        
        <div id="app">

            <b-navbar></b-navbar>

            <router-view></router-view>

            <b-footer></b-footer>

        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
