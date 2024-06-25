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
            <div class="row ">
                <div class="col-25">
                    <a class="btn btn-success" href="{{ url('coleccion/create') }}">NUEVO</a>
                </div>

                <div class="col-25">
                    
                    <div class="table">
                        <table class="table table-striped table-bordered table=condensed table-hover">
                            <thead>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Planta.</th>
                                
                                <th>ACCION</th>
                            </thead>
        
                            @foreach($coleccion as $ob)
                            <tr>
                             <td>{{$ob->id}}</td>	
                             <td>{{$ob->nombre}}</td>
                             <td>{{$ob->descripcion}}</td>
                             <td>{{$ob->planta}}</td>			
                            
                             <td>
                                <a class="btn btn-outline-primary " href='{{ url("coleccion", ["id" => $ob->id]) }}'>Seleccionar</a>
                                <a class="btn btn-info" href='{{ url("coleccion/{$ob->id}/edit") }}'>Editar</a>
                                <!-- Button trigger modal -->
                                <a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$ob->id}}"><button class="btn btn-danger">ELIMINAR</button></a>
                             </td>	
                            </tr>
                            @include('recursos.coleccion.modal')
                            @endforeach  
        
                        </table>
                       
                    </div>
                    
               </div>
               <div class="col-25"></div>
        
            </div>
        
        </div>



</x-app-layout>

