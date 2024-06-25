<x-app-layout>

    <x-slot name="header">
        
        <div class="container">
            <div class="row row-cols-3">
                <div class="col-25"></div>
                <div class="col-50">

                <h2 class="fw-semibold">
                {{ __('Tipos de Plagas') }}
                </h2>

                </div>

                <div class="col-25"></div>
            </div>
        </div>
        

    </x-slot>

    
        <div class="conainer bg-white">

            <div class="row row-cols-3 ">

                <div class="col-25"></div>

                <div class="col-50">  

                    <div class="container">

                        <div class="row pb-3 ">
                            <div class="col">&nbsp;</div>
                            <div class="col">
                                <img id="imagen" src="/img/agro.png" /> 
                                <input id="archivo" name="archivo" type="file" hidden > 
                            </div>
                            <div class="col">&nbsp;</div>
                        </div>

                        <div class="row pb-3 ">
                            <div class="col">&nbsp;</div>
                           <div class="col"><button class="btn btn-primary " id="cargar">Cargar</button></div>
                           <div class="col">&nbsp;</div>
                            <div class="col"><button class="btn btn-info  " id="identificar">Identificar</button></div>  
                            <div class="col">&nbsp;</div>
                        </div>

                        <div class="row">
                            
                            <div class="container-fluid">
                                <div id="contenido" class="row">

                                </div>
                            </div>
                            
                        </div>
                        
                    </div>                 
                    
               </div>

               <div class="col-25"></div>
        
            </div>
        
        </div>


        <script src="/js/archivo.js"></script>
        <script src="/js/plaga.js"></script>
</x-app-layout>


