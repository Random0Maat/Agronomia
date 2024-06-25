<x-guest-layout>

    <div class="row">
        <div class="col">&nbsp;</div>
    </div>

    <div class="row">
        <div class="col">&nbsp;</div>    
        <div class="col"><h1>Registrar Usuario</h1></div> 
        <div class="col">&nbsp;</div>
    </div>

    <div class="row">
        <div class="col">&nbsp;</div>
    </div>

    <div class="row">

        <div class="col">&nbsp;</div>
        <div class="col">&nbsp;</div>
        <div class="col">
            <a href="/">
            <img src="/img/agro.png" width="70%" height="80%"/>
            </a>
         </div>
         <div class="col">&nbsp;</div>
        <div class="col">&nbsp;</div>
        
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        
           

            <!-- Email Address -->
            <div class="row row-cols-3">
                <div class="col-25">&nbsp;</div>
                <div class="col-50">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="d-block form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="col-25">&nbsp;</div>
    
                
            </div>

            <!-- Password -->
            <div class="row row-cols-3">
                <div class="col-25">&nbsp;</div>
                <div class="col-50">
                   <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="d-block form-control"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" /> 
                    </div>
                    <div class="col-25">&nbsp;</div>
        
                    
            </div>

            <!-- Confirm Password -->
            <div class="row row-cols-3">
                <div class="col-25">&nbsp;</div>
                <div class="col-50">
                   <x-input-label for="password_confirmation" :value="__('Confirma tu Password')" />

                    <x-text-input id="password_confirmation" class="d-block form-control mb-2"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" /> 
                    </div>
                    <div class="col-25 ">&nbsp;</div>
            
            </div>

           
            <div class="row row-cols-3">
                <div class="col-25">&nbsp;</div>
                <div class="col-50">
                    <a class="d-block link-underline-primary mx-5 mb-2" href="{{ route('login') }}">
                    {{ __('Estas Registrado?') }}
                    </a> 
                </div>
                <div class="col-25">&nbsp;</div>

            </div>

            <div class="row row-cols-3">
                <div class="col-25">&nbsp;</div>
                <div class="col-50">
                    <div class="container">
                        <div class="row justify-content-center ">
                            <x-primary-button style="width: 30%;">
                            {{ __('Registrar') }}
                            </x-primary-button> 
                        </div>
                    </div>
                </div>
                <div class="col-25">&nbsp;</div>
      
            </div>
           

     
    </form>
</x-guest-layout>
