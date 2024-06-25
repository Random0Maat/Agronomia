<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>SMARTFARM</title>

        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <script src="/js/bootstrap.bundle.min.js"></script>
       
    </head>
    <body>

        <div class="container-fluid">

            {{ $slot }}
            
        </div>

    </body>
</html>
