<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold ">
            {{ __('Perfil') }}
        </h2>
    </x-slot>

    <div class="container py-0">
        <div class="row">
            <div class="p-3 bg-white ">
                <div class="">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
