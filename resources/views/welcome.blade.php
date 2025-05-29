<x-guest-layout>
    <div class="min-h-screen bg-black flex flex-col justify-center items-center px-6">
        <div class="text-center max-w-2xl">
            <h1 class="text-5xl font-extrabold text-[#708238] mb-6">
                Bienvenido a <span class="text-white">VentasPro</span>
            </h1>

            <p class="text-lg text-gray-300 mb-10">
                Sistema profesional para registrar ventas, controlar productos y usuarios de forma segura. 
            </p>

            <a href="{{ route('login') }}"
               class="inline-block px-8 py-3 text-white font-semibold rounded-lg shadow-lg bg-[#708238] hover:bg-[#5e6f2f] transition">
                Iniciar Sesión
            </a>
        </div>

        <footer class="absolute bottom-6 text-sm text-gray-500">
            © {{ date('Y') }} BarEspe VentasPro. Todos los derechos reservados.
        </footer>
    </div>
</x-guest-layout>
