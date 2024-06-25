<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="border border-primary" :status="session('status')" />

    <div class="row">
        <div class="col">&nbsp;</div>
    </div>

    <div class="row">
        <div class="col">&nbsp;</div>    
        <div class="col"><h1>Iniciar Session</h1></div> 
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

    <form method="POST" action="{{ route('login') }}">
        @csrf

        
            <!-- Email Address -->
            <div class="row row-cols-3">
                
                <div class="col-25">&nbsp;</div>
                <div class="col-50">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="d-block form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" />
                </div>
                <div class="col-25">&nbsp;</div> 
                
            </div>

            <!-- Password -->
            <div class="row row-cols-3">
                
                <div class="col-25">&nbsp;</div>
                <div class="col-50">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="d-block form-control mb-2"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="border border-primary" />
                </div>
                <div class="col-25">&nbsp;</div> 
                
            </div>

            <!-- Remember Me -->
            <div class="row row-cols-3">
                <div class="col-25">&nbsp;</div>
                <div class="col-50">
                <label for="remember_me">
                    <input id="remember_me" type="checkbox" form-control class="rounded border-primary text-primary shadow-sm p-3 mb-2  bg-body-tertiary rounded focus:border border-primary-subtle" name="remember">
                    <span >{{ __('Recuerdame') }}</span>
                </label>
            </div>
            <div class="col-25">&nbsp;</div>

        </div>
                    
        <div class="row row-cols-3">
            <div class="col-25">&nbsp;</div>
            <div class="col-50">
                @if (Route::has('password.request'))
                    <a class="d-block link-underline-primary mb-2" href="{{ route('password.request') }}">
                        {{ __('Olvidaste tu Password?') }}
                    </a>
                @endif
            </div>
            <div class="col-25">&nbsp;</div>

        </div>
        <div class="row row-cols-3">
            <div class="col-25">&nbsp;</div>
            <div class="col-50">
                <div class="container">
                    <div class="row justify-content-center ">
                        <x-primary-button style="width: 30%;">
                            {{ __('Log in') }}
                            </x-primary-button> 
                    </div>
                </div>
            </div>
            <div class="col-25">&nbsp;</div>

        </div>
            
      
    </form>
</x-guest-layout>
