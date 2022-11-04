<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <a class="hover:underline" href="{{ route('home') }}">Home</a> / <a class="hover:underline"
                    href="{{ route('freefire.index') }}">Free Fire</a> / Detalle
            </h2>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl sm:rounded-lg"> {{-- se le quito la propiedad overflow-hidden --}}
                <div class="grid grid-cols-1 md:grid-cols-2 p-4 h-full md:divide-x">
                    <div class="p-2">
                        <h2 class="mb-4 font-bold">Detalle de la compra</h2>
                        <div class="">
                            <div>
                                <p><span class="font-semibold">Item :</span> {{ $selectedItem->name }}</p>
                                <p><span class="font-semibold">Precio :</span> US {{ $selectedItem->price }}</p>
                                <p><span class="font-semibold">Metodo de pago :</span> Paypal</p>
                            </div>
                        </div>
                        <p class="my-4 font-bold">Datos de la cuenta:</p>
                        {{-- inputs pidiendo id de jugador --}}
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="first_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">ID</label>
                                <input type="number" id="first_name" wire:model="id_account"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="914782698764" required>
                                @error('id_account')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="last_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nickname</label>
                                <input type="text" id="last_name" wire:model="nickname_account"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="DiegoRTX" required>
                                @error('nickname_account')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <x-jet-danger-button class="float-right" wire:click="createOrder">
                            Ordenar
                        </x-jet-danger-button>
                    </div>
                    <div class="p-2">
                        <h2 class="text-xl">importante:</h2>
                        <ul>
                            <li>Solo Región: <span class="font-bold">SUDAMERICA</span></li>
                            <li><span class="font-semibold">1)</span> Ingrese el ID de su cuenta correctamente.</li>
                            <li><span class="font-semibold">2)</span> Ingrese el nickname de su cuenta para facilitar la identificacion de su cuenta.</li>
                            <li><span class="font-semibold">3)</span> Una vez genere la orden sera redirigido al area de pago.</li>
                            <li><span class="font-semibold">4)</span> Los diamantes seran recargados directamente a su cuenta en un plazo de 3 min a 30 min.</li>
                            <li><span class="font-semibold">5)</span> Puede revisar el estado de su orden en <span class="font-bold">sus ORDENES.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
