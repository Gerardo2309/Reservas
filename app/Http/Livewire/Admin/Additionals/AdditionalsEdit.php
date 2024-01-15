<?php

namespace App\Http\Livewire\Admin\Additionals;

use App\Models\Additional;
use Livewire\Component;

class AdditionalsEdit extends Component
{
    public $open = false;
    public $additional,$name;
    protected $rules = [
        'name' => 'required',
    ];
   public function mount(Additional $additional){
        $this->additional = $additional;
        $this->name = $additional->name;
    }
    public function edit(){
        // validate
        $this->validate();


        $this->additional->update([
            'name' => $this->name,
        ]);


        $this->emit('render');
        $this->reset('open','name');
        $this->emit('alert','Datos Guardados','El Tipo de Tour fue editado correctamente');
    }
    public function delet(Additional $additional){
        $additional->delete();
        $this->emit('render');
        $this->emit('alert','Datos Eliminados','El Tipo de Tour fue Eliminado correctamente');

    }
    public function render()
    {
        return view('livewire.admin.additionals.additionals-edit');
    }
}
