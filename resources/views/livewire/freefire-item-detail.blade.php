<x-slot name="header">
    {{-- <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            <a class="hover:underline" href="{{ route('home') }}">Inicio</a> / <a class="hover:underline"
                href="{{ route('freefire.index') }}">Free Fire</a> / Detalle
        </h2>
    </div> --}}
    <ul class="flex border-b">
        <li class="mr-1">
            <a class="inline-block py-2 px-4 text-black hover:text-blue-800 font-semibold"
                href="{{ route('home') }}">Inicio</a>
        </li>
        <li class="mr-2">
            <a class="inline-block py-2 px-4 text-black hover:text-blue-800 font-semibold"
                href="{{ route('freefire.index') }}">Free Fire</a>
        </li>
        <li class="-mb-px mr-1">
            <a class=" inline-block border-4 border-t border-r rounded-t py-2 px-4 text-blue-700 font-semibold"
                href="#">Detalle</a>
        </li>
    </ul>
</x-slot>

<div class="shadow-xl sm:rounded-lg"> {{-- se le quito la propiedad overflow-hidden --}}
    <div class="grid grid-cols-1 md:grid-cols-2 p-4 h-full md:divide-x">
        <div class="p-2">
            <div class="flex items-center my-4 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5">
                <p class="text-center font-semibold mx-4 mb-0">Datos de la cuenta</p>
            </div>
            {{-- inputs pidiendo id de jugador --}}
            <div class="grid gap-3 mb-5 md:grid-cols-2">
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium ">ID de Free
                        Fire</label>
                    <input type="number" id="first_name" wire:model="id_account"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="ID de la Cuenta a Recargar" required>
                    @error('id_account')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="last_name" class="block mb-2 text-sm font-medium ">Nombre del
                        Jugador</label>
                    <input type="text" id="last_name" wire:model="nickname_account"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="DiegoRTX" required>
                    @error('nickname_account')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <x-jet-danger-button class="float-right" wire:click="createOrder">
                    Ordenar
                </x-jet-danger-button>
            </div>
            <div class="bg-cyan-100 text-white"">
                <h2 class="bg-cyan-700 mb-4 font-medium text-center">Detalle de la compra</h2>
                <div class="text-black">
                    <div>
                        <p><span class="font-semibold"></span> {{ $selectedItem->name }} <span
                                class="text-semibold text-yellow-500">{{ $selectedItem->bonus }}</span></p>
                        <p><span class="font-semibold">Precio :</span> Bs {{ $selectedItem->price }}</p>
                        <p><span class="font-semibold">Metodo de pago :</span> Paypal</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-2">
            <h2 class="text-xl">importante:</h2>
            <ul>
                <li>Solo Región: <span class="font-bold">SUDAMERICA</span></li>
                <li><span class="font-semibold">1)</span> Ingrese el ID de su cuenta correctamente.</li>
                <li><span class="font-semibold">2)</span> Ingrese el nickname de su cuenta para facilitar la
                    identificacion de su cuenta.</li>
                <li><span class="font-semibold">3)</span> Una vez genere la orden sera redirigido al area de
                    pago.</li>
                <li><span class="font-semibold">4)</span> Los diamantes seran recargados directamente a su
                    cuenta en un plazo de 3 min a 30 min.</li>
                <li><span class="font-semibold">5)</span> Puede revisar el estado de su orden en <span
                        class="font-bold">sus ORDENES.</span></li>
            </ul>
        </div>
    </div>
</div>
