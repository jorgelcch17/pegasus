<div>
    <x-slot name="header">
        {{-- <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <a class="hover:underline" href="{{ route('home') }}">Inicio</a> / Pagos
            </h2>
        </div> --}}
        <ul class="flex border-b">
            <li class="mr-1">
                <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold"
                    href="{{ route('home') }}">Inicio</a>
            </li>
            <li class="-mb-px mr-1">
                <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-700 font-semibold"
                    href="#">Pago</a>
            </li>
        </ul>
    </x-slot>
    <div class="py-12 p-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-black shadow-xl sm:rounded-lg"> {{-- se le quito la propiedad overflow-hidden --}}
                <div class="grid grid-cols-1 md:grid-cols-2 p-4 h-full">
                    <div class="">
                        <div class="flex flex-col justify-center">
                            {{-- <img class="w-40 h-40 rounded-full" src="{{ asset('storage/items') }}/freefire.webp"
                                alt="{{ $item->name }}"> --}}
                                <h2 class="text-xl font-bold">Orden-{{ $item->id }}</h2>

                            <div class="flex items-center gap-2">
                                <h2 class="text-lg text-gray-800">{{ $item->freefire_item->name }}</h2>
                                <span class="font-semibold text-lg text-yellow-500">{{ $item->freefire_item->bonus }}</span>
                            </div>
                            <h2 class="text-lg text-gray-800">USD {{ $item->price }}</h2>

                        </div>
                        <p class="py-2">El pago con paypal hara que tu orden sea aceptada al instante.</p>
                        <div>
                            <div id="paypal-button-container"></div>
                        </div>
                        
                    </div>
                    <div>
                        <p>Si eres de Bolivia y gustas otra forma de pago puedes contactarnos al siguiente whatsapp</p>
                        {{-- boton de whatsapp hecho con tailwind --}}
                        <a href="https://wa.me/59175853156" target="_blank"
                            class="flex items-center justify-center w-full px-4 py-2 mt-4 text-base font-medium text-white bg-green-600 border border-transparent rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 2a8 8 0 00-8 8 8 8 0 008 8 8 8 0 008-8 8 8 0 00-8-8zm3.293 5.293a1 1 0 00-1.414 0L10 7.586 8.707 6.293a1 1 0 00-1.414 1.414l1.5 1.5a1 1 0 001.414 0l1.5-1.5a1 1 0 000-1.414zm-6.586 6.586a1 1 0 011.414 0l1.5 1.5a1 1 0 001.414 0l1.5-1.5a1 1 0 011.414 1.414l-1.5 1.5a1 1 0 01-1.414 0l-1.5-1.5a1 1 0 00-1.414 0l-1.5 1.5a1 1 0 01-1.414-1.414l1.5-1.5z"
                                    clip-rule="evenodd" />
                            </svg>
                            Contactar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script src="https://www.paypal.com/sdk/js?client-id={{ config('services.paypal.client_id') }}&currency=USD"></script>
    <script>
        paypal.Buttons({
            // Sets up the transaction when a payment button is clicked
            createOrder: (data, actions) => {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: "{{ $item->price }}" // Can also reference a variable or function
                        }
                    }]
                });
            },
            // Finalize the transaction after payer approval
            onApprove: (data,  actions) => {
                return actions.order.capture().then((details) => {
                    // Show a success message to the buyer
                    Livewire.emit('payOrder');
                });                
            }
        }).render('#paypal-button-container');
    </script>
@endpush