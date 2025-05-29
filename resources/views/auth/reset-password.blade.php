<x-guest-layout>
    <div class="py-10 bg-white">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow rounded-lg p-6 border border-[#708238]">
                <h2 class="text-xl font-semibold text-[#708238] mb-4">
                    {{ __('Restablecer Contraseña') }}
                </h2>

                <form method="POST" action="{{ route('password.store') }}">
                    @csrf

                    <!-- Token oculto -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Correo electrónico -->
                    <div class="mb-4">
                        <x-input-label for="email" :value="__('Correo Electrónico')" />
                        <x-text-input id="email"
                                      class="block mt-1 w-full border border-gray-300 rounded-lg text-black focus:ring-[#708238] focus:border-[#708238]"
                                      type="email"
                                      name="email"
                                      :value="old('email', $request->email)"
                                      required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Contraseña -->
                    <div class="mb-4">
                        <x-input-label for="password" :value="__('Contraseña')" />
                        <x-text-input id="password"
                                      class="block mt-1 w-full border border-gray-300 rounded-lg text-black focus:ring-[#708238] focus:border-[#708238]"
                                      type="password"
                                      name="password"
                                      required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirmar contraseña -->
                    <div class="mb-4">
                        <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" />
                        <x-text-input id="password_confirmation"
                                      class="block mt-1 w-full border border-gray-300 rounded-lg text-black focus:ring-[#708238] focus:border-[#708238]"
                                      type="password"
                                      name="password_confirmation"
                                      required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <!-- Botón -->
                    <div class="mt-6">
                        <x-primary-button class="w-full bg-[#708238] hover:bg-[#5e6f2f] text-white font-semibold py-2 px-4 rounded-lg transition">
                            {{ __('Restablecer Contraseña') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
