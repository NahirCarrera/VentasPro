<nav x-data="{ open: false }" class="bg-white shadow-md border-b border-[#708238]">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo + Brand -->
            <div class="flex items-center gap-4">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-4">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-14 w-auto">
                    <div class="hidden sm:block">
                        <h1 class="text-2xl font-extrabold text-[#708238] leading-tight">BarEspe</h1>
                        <p class="text-sm text-gray-500 -mt-1 font-semibold">VentasPro</p>
                    </div>
                </a>
            </div>

            <!-- Nav Links -->
            <div class="hidden sm:flex gap-10">
                <a href="{{ route('dashboard') }}"
                   class="text-lg font-semibold tracking-wide text-[#708238] hover:text-black transition">
                    Inicio
                </a>
                {{-- Puedes agregar más enlaces aquí --}}
            </div>

            <!-- Dropdown -->
            <div class="hidden sm:flex items-center gap-3">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center px-4 py-2 border border-[#708238] text-sm font-medium rounded-md text-[#708238] hover:bg-[#708238] hover:text-white transition">
                            {{ Auth::user()->name }}
                            <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                Cerrar Sesión
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Mobile -->
            <div class="sm:hidden flex items-center">
                <button @click="open = ! open" class="p-2 rounded-md text-[#708238] hover:bg-[#708238] hover:text-white transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Responsive -->
    <div :class="{ 'block': open, 'hidden': !open }" class="sm:hidden bg-white border-t border-[#708238]">
        <div class="px-4 pt-4 pb-2 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-[#708238] font-medium hover:text-black">
                🏠 Inicio
            </x-responsive-nav-link>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="text-[#708238] hover:text-black">
                    Cerrar Sesión
                </x-responsive-nav-link>
            </form>
        </div>
    </div>
</nav>
