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


    <form method="POST" action="{{ url('coleccion') }}" enctype="multipart/form-data">
        @csrf

            
            <div class="row row-cols-3">

                <div class="col-25">&nbsp;</div>
                <div class="col-50">
                    <x-input-label for="nombre" :value="__('NOMBRE')" />
                    <x-text-input id="nombre" class="d-block form-control" type="text" name="nombre" :value="old('nombre')" required autocomplete="nombre" />
                    <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                </div>
                <div class="col-25">&nbsp;</div>
        
            </div>

            <div class="row row-cols-3">

                <div class="col-25">&nbsp;</div>
                <div class="col-50">
                    <x-input-label for="descripcion" :value="__('DESCRIPCION')" />
                    <x-text-input id="descripcion" class="d-block form-control" type="text" name="descripcion" :value="old('descripcion')" required autocomplete="descripcion" />
                    <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
                </div>
                <div class="col-25">&nbsp;</div>
        
            </div>

            <div class="row row-cols-3">
                <div class="col-25">&nbsp;</div>
                <div class="col-50">
                    <x-input-label for="planta" :value="__('PLANTA')" />
                    <input id="planta" type="file" name="planta" accept="image/*" required>
                    <x-input-error :messages="$errors->get('planta')" class="mt-2" />
                </div>
                <div class="col-25">&nbsp;</div>
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

</x-app-layout>
