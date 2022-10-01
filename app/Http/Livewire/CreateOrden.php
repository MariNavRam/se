<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ordene;

class CreateOrden extends Component
{
    public $ordenes, $orden; 


    public function mount(){
        $this->ordenes = Ordene::get();
        $this->orden = new Ordene;
    }

    public function render()
    {
        return view('livewire.create-orden');
    }

    public function create(){
        $this->dispatchBrowserEvent('openModal');
    }

    public function delete($id){
        
    }

    public function update($id){

    }

}
