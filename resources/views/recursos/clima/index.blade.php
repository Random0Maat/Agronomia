<x-app-layout>

    <x-slot name="header">
        
        <div class="container">
            <div class="row row-cols-3">
                <div class="col-25"></div>
                <div class="col-50">

                <h2 class="fw-semibold">
                {{ __('Clima Semanal') }}
                </h2>

                </div>

                <div class="col-25"></div>
            </div>
        </div>
        

    </x-slot>

    
        <div class="conainer bg-white">

            <div class="row  ">

                

                <div class="col">  

                    <div class="container">

                        <div class="row pb-3 ">

                                <div class="container-fluid">
                                    <div id="climalocal" class="row">
    
                                    </div>
                                </div>

                                                       
                        </div>

                        <div class="row pb-3 ">
                            <div class="col">&nbsp;</div>
                            <div class="col">&nbsp;</div>
                            <div class="col"><button class="btn btn-primary " id="bclima">Cargar</button></div>
                            <div class="col">&nbsp;</div>
                            <div class="col">&nbsp;</div>
                           
                        </div>
                        
                    </div>                 
                    
                </div>

               
        
            </div>
        
        </div>


       
        <script src="/js/clima.js"></script>
</x-app-layout>


