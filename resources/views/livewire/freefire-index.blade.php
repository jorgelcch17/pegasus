<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <a class="hover:underline" href="{{ route('home') }}">Home</a> / Free Fire
            </h2>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{ $selectedId }}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                <div class="bg-white shadow-xl sm:rounded-lg"> {{-- se le quito la propiedad overflow-hidden --}}
                    <div>
                        @foreach ($items as $item)
                            <div class="flex items-center gap-2 p-2">
                                <div class="flex items-center h-5">
                                    <input id="item-{{ $item->id }}" aria-describedby="helper-radio-text"
                                        type="radio" value="{{ $item->id }}" wire:model="selectedId"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                </div>
                                <div class="flex">
                                    <img class="w-10 h-10 rounded-full" src="{{ asset('storage/items') }}/freefire.webp"
                                        alt="{{ $item->name }}">
                                    <div class="ml-2 text-sm flex flex-col justify-center">
                                        <label for="item-{{ $item->id }}"
                                            class="font-medium text-gray-900 dark:text-gray-300">{{ $item->name }}</label>
                                        @if ($item->description)
                                            <p class="text-gray-500 dark:text-gray-400">fadssf</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="bg-white shadow-xl sm:rounded-lg"> {{-- se le quito la propiedad overflow-hidden --}}
                    <div class="flex flex-col justify-center p-4 h-full">
                        @if ($selectedId)
                            <h2 class="font-semibold">Detalle de la compra</h2>
                            <div class="grid grid-cols-2">
                                <div>
                                    <p>Item</p>
                                    <p>Precio</p>
                                    <p>Metodo de pago</p>
                                </div>
                                <div class="font-thin">
                                    <p>{{ $selectedName }}</p>
                                    <p>US {{ $priceItemSelected }}</p>
                                    <p>Paypal</p>
                                </div>
                            </div>

                            <p class="mt-4 font-semibold">Datos de la cuenta:</p>
                            {{-- inputs pidiendo id de jugador --}}
                            <div class="grid gap-6 mb-6 md:grid-cols-2">
                                <div>
                                    <label for="first_name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">ID</label>
                                    <input type="text" id="first_name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="914782698764" required>
                                </div>
                                <div>
                                    <label for="last_name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nickname</label>
                                    <input type="text" id="last_name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="DiegoRTX" required>
                                </div>
                            </div>
                            @else
                            <img src="{{ asset('storage/items/banner_item.png') }}" alt="selecciona un producto de diamantes">
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
