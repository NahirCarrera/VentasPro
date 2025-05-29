<x-guest-layout>
    <div class="min-h-screen bg-white flex flex-col justify-center items-center px-6 relative overflow-hidden">
        <!-- Círculo decorativo -->
        <div class="absolute -top-20 -left-20 w-72 h-72 bg-[#708238]/10 rounded-full z-0"></div>

        <!-- Contenido -->
        <div class="z-10 text-center max-w-2xl bg-white p-10 rounded-xl shadow-xl border border-[#708238]/30">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="mx-auto w-24 mb-6">

            <h1 class="text-4xl sm:text-5xl font-extrabold text-[#708238] mb-4">
                Bienvenido a <span class="text-black">VentasPro</span>
            </h1>

            <p class="text-base sm:text-lg text-gray-600 mb-8">
                Plataforma para gestión de ventas, productos y usuarios en el <strong>Bar ESPE</strong>.
            </p>

            <a href="{{ route('login') }}"
               class="inline-block px-8 py-3 text-white font-semibold rounded-full shadow-lg bg-[#708238] hover:bg-[#5e6f2f] transition duration-300 ease-in-out">
                Iniciar Sesión
            </a>
        </div>

        <!-- Footer -->
        <footer class="absolute bottom-6 text-xs text-gray-400 z-10">
            © {{ date('Y') }} BarEspe VentasPro. Todos los derechos reservados.
        </footer>
    </div>
</x-guest-layout>
