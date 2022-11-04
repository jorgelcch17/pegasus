<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\FreefireItem;

class FreefireItemDetail extends Component
{
    public $selectedItem;
    public $id_account;
    public $nickname_account;

    public function updated($fields){
        $this->validateOnly($fields, [
            'id_account' => 'required|numeric',
            'nickname_account' => 'required',
        ]);
    }
    
    // traduciendo las salidas de los errores
    public function messages()
    {
        return [
            'id_account.required' => 'El campo ID es obligatorio',
            'id_account.numeric' => 'El campo ID debe contener solo números',
            'nickname_account.required' => 'El campo Nickname de la cuenta es obligatorio',
        ];
    }
    
    public function mount($id){
        $this->selectedItem = FreefireItem::find($id);
    }
    
    public function createOrder(){
        $this->validate([
            'id_account' => 'required|numeric',
            'nickname_account' => 'required',
        ]);

        $order = auth()->user()->ff_orders()->create([
            'id_account' => $this->id_account,
            'nickname_account' => $this->nickname_account,
            'price' => $this->selectedItem->price,
            'order_status' => 'pending',
            'freefire_item_id' => $this->selectedItem->id,
        ]);

        // $this->emit('setOrder', $order);
        return redirect()->route('freefire.payment', $order);
    }

    public function render()
    {
        return view('livewire.freefire-item-detail');
    }
}
