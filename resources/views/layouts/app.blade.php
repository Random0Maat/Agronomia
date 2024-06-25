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

        <div class="container-fluid bg-body-secondary ">

            <div class="row">
                @include('layouts.navigation')
            </div>
           
            
                <!-- Page Heading -->
                @if (isset($header))

                    <div class="row">

                        <header class="bg-white shadow-sm p-3 bg-body-tertiary rounded">
                            
                                {{ $header }}
                         
                        </header>

                    </div>
                    
                @endif
                <!-- Page Content -->
            
            
            <div class="row">
                {{ $slot }}
            </div>

        </div>
    </body>
</html>
