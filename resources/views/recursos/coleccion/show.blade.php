<x-app-layout>

    <x-slot name="header">
        
        <div class="container">
            <div class="row row-cols-3">
                <div class="col-25"></div>
                <div class="col-50">

                <h2 class="fw-semibold">
                {{ __('Coleccion') }}
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
                        <div class="row ">
                            <div class="col-25">&nbsp;</div>
                            <div class="col-50"> 

                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table=condensed table-hover">
                                        
                                            <tbody>
                                                <tr>
                                                    <td>ID</td>
                                                    <td>{{$coleccion->id}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nombre</td>
                                                    <td>{{$coleccion->nombre}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Descripcion</td>
                                                    <td>{{$coleccion->descripcion}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Planta</td>
                                                    <td><img id="img" width="50%" height="50%" src="{{'/plantas/'.$coleccion->planta}}"/></td>
                                                </tr>
                                                <tr>
                                                    <td>Clima</td>
                                                    <td id="clima">...</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                    

                                <div class="container">
                                    <div class="row">

                                        <div class="col">&nbsp;</div>
                                        <div class="col">&nbsp;</div>

                                        <div class="col"><button class="btn btn-primary " id="conexion">Iniciar</button></div>
                                        <div class="col"><button class="btn btn-outline-info" id="actualizar">Actualizar</button></div>
                                        
                                        <div class="col">&nbsp;</div>
                                        <div class="col">&nbsp;</div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-25"> &nbsp;</div>
                        </div>
                    </div>
                    
                   
                
                    
               </div>
               <div class="col-25"></div>
        
            </div>
        
        </div>


        <script src="/js/conexion.js"></script>
</x-app-layout>


