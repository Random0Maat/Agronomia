
    <!-- Primary Navigation Menu -->
<nav class="bg-white border border-secondary-subtle ">

    <div class="container-fluid">

        <div class="row">

            <div class="col mt-3">

                <a href="{{ route('dashboard') }}">
                    <img src="/img/agro.png" width="20%" height="40%"/>
                </a>
        
            </div>
        
            <div class="col">


                <nav class="navbar navbar-expand-lg bg-body-tertiary">

                    <div class="container-fluid">

                        
                        <div class=" navbar-collapse" id="navbarScroll">

                            <ul class="navbar-nav me-auto my-2 my-lg-0 " >
    
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('suelo') }}">Suelo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('planta') }}">Planta</a>
                                </li> 
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('plaga') }}">Plaga</a>
                                </li> 
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('clima') }}">Clima</a>
                                </li> 
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('coleccion') }}">Coleccion</a>
                                </li> 
            
                            </ul>
    
    
                        </div>
    
                    </div>
                    
                </nav>


            </div>
        
            <div class="col">

                <div class="d-flex justify-content-end mb-3">

                   
                    <div class="p-2">

                        <div class="dropdown">
                
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                @if(Auth::check())

                                   {{ Auth::user()->email}} 
                                @endif
                                
                            </button>
                
                            <ul class="dropdown-menu">
                
                              <li><a class="dropdown-item" href="{{route('profile.edit')}}">{{ __('Perfil') }}</a></li>
                              <li>
                
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                
                                        <x-primary-button >
                                            {{ __('Log Out') }}
                                        </x-primary-button> 
                
                                    </form>
                
                              </li>
                              
                            </ul>
                
                        </div> 

                    </div>


                </div>
        
            </div>  

        </div>

    </div>
        
</nav>




                    