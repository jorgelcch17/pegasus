<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\FreefireItem;

class FreefireIndex extends Component
{
    public $selectedId = null;

    public $selectedName = null;

    public $priceItemSelected = null;

    // funcion que devuelve actualiza el precio cuando cambia el valor de itemSelected
    public function updatedselectedId(){
        $this->priceItemSelected = FreefireItem::find($this->selectedId)->price;
        $this->selectedName = FreefireItem::find($this->selectedId)->name;
    }

    public function render()
    {
        $items = FreefireItem::where('is_active', true)->get();
        return view('livewire.freefire-index', compact('items'))->layout('layouts.app');
    }
}
