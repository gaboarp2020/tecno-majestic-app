<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Tecnomajestic | title</title>
        <meta name="description" content="Somos una empresa orientada a ofrecer servicios tecnológicos que incluyen soluciones integrales para nuestros clientes, asegurando la operatividad de sus negocios con tecnología de punta.">

        <!-- Twitter Card data -->
        <meta name="twitter:card" value="summary">

        <!-- Open Graph data -->
        <meta property="og:title" content="Tecnomajestic" />
        <meta property="og:type" content="Innovación Tecnológica" />
        <meta property="og:url" content="http://www.tecnomajestic.com/" />
        <meta property="og:image" content="http://www.tecnomajestic.com/img/logo.png" />
        <meta property="og:description" content="Empresa orientada a ofrecer servicios tecnológicos que incluyen soluciones integrales para sus clientes, asegurando la operatividad de sus negocios con tecnología de punta." />

        <link rel="shortcut icon" href="{{{ asset('/favicon.ico?v=2') }}}">
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>

        @yield('content')

        <script src="/js/app.js"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135481504-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-135481504-1');
        </script>

    </body>
</html>
