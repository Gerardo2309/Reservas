<?php

namespace App\Http\Livewire\Admin\Tours\TypeTours;

use App\Models\Tipo_tour;
use Livewire\Component;

class TypeToursEdit extends Component
{
    public $open = false;
    public $ttour,$name;
    protected $rules = [
        'name' => 'required',
    ];
   public function mount(Tipo_tour $ttour){
        $this->ttour = $ttour;
        $this->name = $ttour->name;
    }
    public function edit(){
        // validate
        $this->validate();


        $this->ttour->update([
            'name' => $this->name,
        ]);


        $this->emit('render');
        $this->reset('open','name');
        $this->emit('alert','Datos Guardados','El Tipo de Tour fue editado correctamente');
    }
    public function delet(Tipo_tour $ttour){
        $ttour->delete();
        $this->emit('render');
        $this->emit('alert','Datos Eliminados','El Tipo de Tour fue Eliminado correctamente');

    }
    public function render()
    {
        return view('livewire.admin.tours.type-tours.type-tours-edit');
    }
}
