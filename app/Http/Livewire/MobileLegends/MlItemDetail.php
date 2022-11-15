<?php

namespace App\Http\Livewire\MobileLegends;

use Livewire\Component;

class MlItemDetail extends Component
{
    public $selectedItem;
    public $game_user_id;
    public $zone_id;

    public function updated($fields){
        $this->validateOnly($fields, [
            'game_user_id' => 'required',
            'zone_id' => 'required',
        ]);
    }
    
    // traduciendo las salidas de los errores
    public function messages()
    {
        return [
            'game_user_id.required' => 'El campo ID es obligatorio',
            'zone_id.required' => 'El campo Nickname de la cuenta es obligatorio',
        ];
    }


    public function mount($id){
        $this->selectedItem = \App\Models\MobileLegendItem::find($id);
    }

    public function createOrder(){
        $this->validate([
            'game_user_id' => 'required',
            'zone_id' => 'required',
        ]);

        $order = auth()->user()->ml_orders()->create([
            'game_user_id' => $this->game_user_id,
            'zone_id' => $this->zone_id,
            'price' => $this->selectedItem->price,
            'order_status' => 'pending',
            'mobile_legend_item_id' => $this->selectedItem->id,
        ]);

        return redirect()->route('mobile-legend.payment', $order);
    }

    public function render()
    {
        return view('livewire.mobile-legends.ml-item-detail');
    }
}
