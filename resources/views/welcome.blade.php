<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SMARTFARM</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <script src="/js/bootstrap.bundle.min.js"></script>
 
    </head>
    <body>

    
            <nav class="navbar navbar-expand-lg bg-body-tertiary">

                <div class="container-fluid">

                    <a class="navbar-brand" href="/">Inicio</a>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                        
                        </ul>

                        @if (Route::has('login'))

                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            
                                @auth
                                    <a class="btn btn-primary" href="{{ url('/dashboard') }}">Panel</a>
                                @else
                                    <a class="btn btn-info" href="{{ route('login') }}">Log in</a>
            
                                    @if (Route::has('register'))
                                        <a class="btn btn-success"  href="{{ route('register') }}">Registrar</a>
                                    @endif
            
                                @endauth
            
                            </div>
        
                        @endif 

                    </div>

                </div>
                
            </nav>

            <div class="container">

                <div class="row">
                    <div class="col">&nbsp;</div>
                </div>

               <div class="row">
                    <div class="col">&nbsp;</div>
                    <div class="col"><h1>SMARTFARM</h1></div>
                    <div class="col">&nbsp;</div>
               </div>

               <div class="row">
                    <div class="col">&nbsp;</div>
               </div>

               <div class="row">
                    <div class="col">&nbsp;</div>
                    <div class="col"><img src="/img/agro.png"/></div>
                    <div class="col">&nbsp;</div>
               </div>
              
            </div>

    </body>
</html>
