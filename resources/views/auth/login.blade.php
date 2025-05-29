<x-guest-layout>
    <div class="w-full max-w-md bg-white border border-[#708238] p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-[#708238] mb-6 text-center">Iniciar Sesión</h2>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4 text-sm text-green-600" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Correo electrónico')" class="text-[#1a1a1a]" />
                <x-text-input id="email" class="mt-1 block w-full bg-white border border-gray-300 text-[#1a1a1a] focus:ring-[#708238] focus:border-[#708238]"
                              type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Contraseña')" class="text-[#1a1a1a]" />
                <x-text-input id="password" class="mt-1 block w-full bg-white border border-gray-300 text-[#1a1a1a] focus:ring-[#708238] focus:border-[#708238]"
                              type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center mb-4">
                <input id="remember_me" type="checkbox"
                       class="rounded border-gray-300 text-[#708238] focus:ring-[#708238]"
                       name="remember">
                <label for="remember_me" class="ml-2 text-sm text-gray-700">{{ __('Recordarme') }}</label>
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between">
                @if (Route::has('password.request'))
                    <a class="text-sm text-[#4b5563] hover:text-[#708238]" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                @endif

                <button type="submit"
                        class="px-5 py-2 bg-[#708238] text-white font-semibold rounded hover:bg-[#5e6f2f] transition">
                    {{ __('Ingresar') }}
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
