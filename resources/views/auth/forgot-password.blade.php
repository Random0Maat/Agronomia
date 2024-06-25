<x-guest-layout>

    <div class="container mt-4">
        <div class="row justify-content-center mb-4">
            {{ __('¿Olvidaste tu contraseña? Ningún problema. Simplemente háganos saber su dirección de correo electrónico y le enviaremos un enlace para restablecer su contraseña que le permitirá elegir una nueva.') }}
        </div>
    </div>

    
    

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="row row-cols-3">
                
            <div class="col-25">&nbsp;</div>
            <div class="col-50">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block form-control" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="col-25">&nbsp;</div> 
            
        </div>

        <div class="row row-cols-3">
            <div class="col-25">&nbsp;</div>
            <div class="col-50">
                <div class="container">
                    <div class="row justify-content-center mt-3">
                        <x-primary-button style="width: 100%;">
                            {{ __('Enlace para restablecer contraseña de correo electrónico') }}
                        </x-primary-button>
                    </div>
                </div>
            </div>
            <div class="col-25">&nbsp;</div>

        </div>
            
    </form>
</x-guest-layout>
