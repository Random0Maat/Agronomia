<section class="">
    <header>
        <h2 class="">
            {{ __('Eliminar Cuenta') }}
        </h2>

        <p class="mt-1 ">
            {{ __('Una vez que se elimine su cuenta, todos sus recursos y datos se eliminaran permanentemente. Antes de eliminar su cuenta, descargue cualquier dato o informacion que desee conservar.') }}
        </p>
    </header>   

    <button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#exampleModal" >{{ __('Eliminar Cuenta') }}</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">{{ __('Eliminar Cuenta') }}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                            @csrf
                            @method('delete')

                            <h2 class="text-lg ">
                                {{ __('Estás seguro de que quieres eliminar tu cuenta?') }}
                            </h2>
                
                            <p class="mt-1 ">
                                {{ __('Una vez que se elimine su cuenta, todos sus recursos y datos se eliminaran permanentemente. Ingrese su contraseña para confirmar que desea eliminar permanentemente su cuenta.') }}
                            </p>
                
                            <div class="mt-5">
                                <x-input-label for="password" value="{{ __('Password') }}" />
                
                                <x-text-input
                                    id="password"
                                    name="password"
                                    type="password"
                                    class="mt-1"
                                    placeholder="{{ __('Password') }}"
                                />
                
                                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                            </div>

                            <div class="mt-5">
                                <button type="button" type="reset" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Cancelar') }}</button>
                                <button type="button" type="submit" class="btn btn-danger">{{ __('Eliminar Cuenta') }}</button>
                            </div>
                        
                        </form>
                    </div>

                    <div class="modal-footer">
                        
                    </div>

                </div>
            </div>
        </div>
</section>
