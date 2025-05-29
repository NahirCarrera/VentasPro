<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#708238] leading-tight">
            {{ __('Mis Ventas') }}
        </h2>
    </x-slot>

    <div class="py-10 bg-white">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow border border-[#708238] rounded-lg p-6">
                @if(session('success'))
                    <div class="mb-4 p-4 text-sm text-green-800 bg-green-100 rounded-lg">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($sales->isEmpty())
                    <p class="text-gray-600">No has registrado ninguna venta.</p>
                @else
                    <table class="w-full text-left text-sm text-gray-800">
                        <thead class="border-b-2 border-[#708238] bg-[#f0f4ec]">
                            <tr>
                                <th class="px-4 py-2">#</th>
                                <th class="px-4 py-2">Producto</th>
                                <th class="px-4 py-2">Cantidad</th>
                                <th class="px-4 py-2">Total</th>
                                <th class="px-4 py-2">Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sales as $index => $sale)
                                @foreach ($sale->details as $detail)
                                    <tr class="border-b hover:bg-[#f9fdf8]">
                                        <td class="px-4 py-2">{{ $index + 1 }}</td>
                                        <td class="px-4 py-2">{{ $detail->product->name }}</td>
                                        <td class="px-4 py-2">{{ $detail->quantity }}</td>
                                        <td class="px-4 py-2">${{ number_format($detail->price * $detail->quantity, 2) }}</td>
                                        <td class="px-4 py-2 text-sm text-gray-500">{{ $sale->created_at->format('d/m/Y') }}</td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
