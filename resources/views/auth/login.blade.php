<x-guest-layout>
    <x-authentication-card>
        {{-- Logo personnalisé --}}
        <x-slot name="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-20 h-20 mx-auto">
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full border-gray-300 focus:border-green-400 focus:ring focus:ring-green-200 focus:ring-opacity-50" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full border-gray-300 focus:border-green-400 focus:ring focus:ring-green-200 focus:ring-opacity-50" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-green-500 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-400" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                {{-- Bouton vert personnalisé --}}
                <x-button class="ms-4 bg-[#00D8B5] hover:bg-[#00bfa1] text-white">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
