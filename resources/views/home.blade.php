<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Selecciona un juego:
        </h2>
    </x-slot>

    <div class="lg:py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @livewire('banner-home')
            <h2 class="pt-6">Recargas mediante ID's:</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 mt-2 gap-2">
                <a class="bg-white border-2 border-blue-200 p-2 hover:shadow-lg" href="{{ route('freefire.index') }}">
                    <img class="w-full aspect-square" src="{{ asset('image/freefire.webp') }}" alt="freefire">
                    <span class="block font-bold text-center pt-2">Free Fire</span>
                </a>
                <a class="bg-white border-2 border-yellow-600 p-2 hover:shadow-lg" href="">
                    <img class="w-full aspect-square" src="{{ asset('image/mobile_legend.png') }}" alt="mobile legend">
                    <span class="block font-bold text-center pt-2">Mobile Legend</span>
                </a>
            </div>

            <h2 class="pt-6">Recargas en cuenta directa:</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 mt-2 gap-2">
                <a class="bg-white border-2 border-gray-700 p-2 hover:shadow-lg" href="{{ route('freefire.index') }}">
                    <img class="w-full aspect-square" src="{{ asset('image/cod_mobile.png') }}" alt="freefire">
                    <span class="block font-bold text-center pt-2">CoD Mobile</span>
                </a>
                <a class="bg-white border-2 border-yellow-600 p-2 hover:shadow-lg" href="">
                    <img class="w-full aspect-square" src="{{ asset('image/stumble_guys.webp') }}" alt="mobile legend">
                    <span class="block font-bold text-center pt-2">Stumble Guys</span>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
