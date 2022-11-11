<div>
    <x-jet-danger-button wire:click="$set('open', true)">
        +Nuevo
    </x-jet-danger-button>
    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Nuevo Item
        </x-slot>
        <x-slot name="content">
            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Nombre') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" wire:model.defer="name"/>
                <x-jet-input-error for="name" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-jet-label for="description" value="{{ __('Descripción') }}" />
                <textarea id="description" class="block mt-1 w-full form-control" wire:model.defer="description"></textarea>
                <x-jet-input-error for="description" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-jet-label for="price" value="{{ __('Precio') }}" />
                <x-jet-input id="price" class="block mt-1 w-full" type="text" wire:model.defer="price"/>
                <x-jet-input-error for="price" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-jet-label for="image" value="{{ __('Imagen') }}" />
                <x-jet-input id="image" class="block mt-1 w-full" type="file" wire:model.defer="image"/>
                <x-jet-input-error for="image" class="mt-2" />
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('showModal')" wire:loading.attr="disabled">
                {{ __('Cancelar') }}
            </x-jet-secondary-button>
            <x-jet-danger-button class="ml-2" wire:click="save" wire:loading.attr="disabled">
                {{ __('Guardar') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
