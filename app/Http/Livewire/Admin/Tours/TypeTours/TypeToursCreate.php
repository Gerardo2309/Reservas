<?php

namespace App\Http\Livewire\Admin\Tours\TypeTours;

use App\Models\Tipo_tour;
use Livewire\Component;

class TypeToursCreate extends Component
{
    public $open = false;
    public $name;
    protected $rules = [
        'name' => 'required',
    ];
    public function create(){
        // validate
        $this->validate();

       Tipo_tour::create([
            'name' => $this->name,
        ]);


        $this->emit('render');
        $this->reset('open','name');
        $this->emit('alert','Datos Guardados','El Tipo de Tour fue agregado correctamente');
    }
    public function render()
    {
        return view('livewire.admin.tours.type-tours.type-tours-create');
    }
}
