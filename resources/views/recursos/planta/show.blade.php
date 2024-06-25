<x-app-layout>

    <x-slot name="header">
        
        <div class="container">
            <div class="row row-cols-3">
                <div class="col-25"></div>
                <div class="col-50">

                <h2 class="fw-semibold">
                {{ __('Planta') }}
                </h2>

                </div>

                <div class="col-25"></div>
            </div>
        </div>
        

    </x-slot>

    
        <div class="conainer bg-white">

            <form method="POST" action="{{ url('planta') }}" enctype="multipart/form-data">
                @csrf
        
                <div class="row  ">
                    <div class="col">&nbsp;</div>
    
                    <div class="col">{{$especie}}</div>
                    <input id="nombre" type="hidden" name="nombre" value="{{$especie}}">
    
                    <div class="col">&nbsp;</div>
            
                </div>
                <div class="row  ">
                    <div class="col">&nbsp;</div>
    
                    <div class="col">{{$descripcion}}</div>
                    <input id="descripcion" type="hidden" name="descripcion" value="{{$descripcion}}">
    
                    <div class="col">&nbsp;</div>
            
                </div>
                    
        
                    <div class="row row-cols-3 mt-3">
                        <div class="col-25">&nbsp;</div>
                        <div class="col-50">
                            <div class="container">
                                <div class="row justify-content-center ">
                                    <x-primary-button class="mb-3" style="width: 30%;">
                                    {{ __('REGISTRAR') }}
                                    </x-primary-button> 
                                </div>
                            </div>
                        </div>
                        <div class="col-25">&nbsp;</div>
              
                    </div>
                   
        
             
            </form>
        
        </div>

        


        
</x-app-layout>


