<?php

namespace App\Http\Livewire\MobileLegends;

use Livewire\Component;

use App\Models\MobileLegendOrder;

class MlPayment extends Component
{
    public $item;

    protected $listeners = ['payOrder'];

    public function mount(MobileLegendOrder $item){
        if($item->order_status == 'approved'){
            return redirect()->route('mobile-legend.index');
        }     
        $this->item = $item;   
    }

    public function payOrder(){
        $this->item->order_status = 'approved';
        $this->item->save();

        //enviando un flash message
        session()->flash('message', 'El pago se ha realizado con éxito');
        return redirect()->route('mobile-legend.index');
    }

    public function render()
    {
        return view('livewire.mobile-legends.ml-payment');
    }
}
