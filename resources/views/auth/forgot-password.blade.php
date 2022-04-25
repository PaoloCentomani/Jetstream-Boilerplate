<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your e-mail address and we will e-mail you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}" x-data="{ loading: false }" x-on:submit="loading = true">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('E-Mail') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <hr class="my-6 border-gray-100">

            <div class="mt-4">
                <x-jet-button class="w-full py-3 justify-center" x-bind:disabled="loading">
                    <div x-show="! loading">
                        {{ __('E-Mail Password Reset Link') }}
                    </div>

                    <div class="text-white" role="status" x-show="loading" x-cloak>
                        <x-icons.loading class="w-5 h-5" />
                    </div>
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
