<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Selecciona un juego:
        </h2> 
    </x-slot> --}}
    @livewire('banner-home')
    <div class="lg:py-1 p-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <h2 class="pt-1 font-bold text-xl">Juegos moviles</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 mt-2 gap-2">
                <a class="max-w-sm bg-white border border-gray-100 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
                    href="{{ route('freefire.index') }}">
                    <img class="rounded-t-lg" src="{{ asset('image/free-fire-index.png') }}" alt="mobile legend">
                    <span class="block font-bold text-center text-black">Free Fire Diamantes</span>
                </a>
                <a class="max-w-sm bg-white border border-gray-100 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
                    href="{{ route('mobile-legend.index') }}">
                    <img class="rounded-t-lg" src="{{ asset('image/mobile_legend.png') }}" alt="mobile legend">
                    <span class="block font-bold text-center text-black">Mobile Legend</span>
                </a>

                <a class="max-w-sm bg-white border border-gray-100 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
                    href="">
                    <img class="rounded-t-lg"" src="{{ asset('image/pugb-mobile-index.jpg') }}" alt="mobile legend">
                    <span class="block font-bold text-center pt-2 text-black">Pugb Mobile</span>
                </a>

                <a class="max-w-sm bg-white border border-gray-100 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
                    href="">
                    <img class="rounded-t-lg" src="{{ asset('image/call-of-duty-mobile.png') }}" alt="freefire">
                    <span class="block font-bold text-center pt-2 text-black">CoD Mobile</span>
                </a>

                <a class="max-w-sm bg-white border border-gray-100 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
                    href="">
                    <img class="rounded-t-lg"" src="{{ asset('image/stumble_guys.png') }}" alt="mobile legend">
                    <span class="block font-bold text-center pt-2 text-black">Stumble Guys</span>
                </a>
            </div>
            <h2 class="pt-6 font-bold text-xl">Servicio Multimedia</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 mt-2 gap-2">
                <a class="max-w-sm bg-white border border-gray-100 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
                    href="">
                    <img class="w-full aspect-square" src="{{ asset('image/netflix.png') }}" alt="Netflix">
                    <span class="block font-bold text-center pt-2 text-black">Netflix</span>
                </a>
                <a class="max-w-sm bg-white border border-gray-100 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
                    href="">
                    <img class="w-full aspect-square" src="{{ asset('image/amazon_prime.png') }}" alt="Amazon prime">
                    <span class="block font-bold text-center pt-2 text-black">Amazon prime</span>
                </a>

                <a class="max-w-sm bg-white border border-gray-100 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
                    href="">
                    <img class="w-full aspect-square" src="{{ asset('image/DisneyPlus.png') }}" alt="Disney+">
                    <span class="block font-bold text-center pt-2 text-black">Disney+</span>
                </a>

                <a class="max-w-sm bg-white border border-gray-100 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
                    href="">
                    <img class="w-full aspect-square" src="{{ asset('image/StarPlus.png') }}" alt="Star+">
                    <span class="block font-bold text-center pt-2 text-black">Star+</span>
                </a>

                <a class="max-w-sm bg-white border border-gray-100 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
                    href="">
                    <img class="w-full aspect-square" src="{{ asset('image/HboMax.jpg') }}" alt="Hbo max">
                    <span class="block font-bold text-center pt-2 text-black">Hbo max</span>
                </a>

                <a class="bg-slate-700 border-2 border-yellow-600 p-2 hover:shadow-lg" href="">
                    <img class="w-full aspect-square" src="{{ asset('image/YoutubePremium.png') }}"
                        alt="Youtube Premium">
                    <span class="block font-bold text-center pt-2 text-black">Youtube Premium</span>
                </a>
            </div>
            <h2 class="pt-6 font-bold text-xl">Tarjeta de regalos mas vendidas</h2>
        </div>
    </div>
</x-app-layout>
