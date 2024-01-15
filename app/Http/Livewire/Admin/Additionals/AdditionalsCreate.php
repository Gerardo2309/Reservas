<?php

namespace App\Http\Livewire\Admin\Additionals;

use App\Models\Additional;
use Livewire\Component;

class AdditionalsCreate extends Component
{
    public $open = false;
    public $name;
    protected $rules = [
        'name' => 'required',
    ];
    public function create(){
        // validate
        $this->validate();

       Additional::create([
            'name' => $this->name,
        ]);


        $this->emit('render');
        $this->reset('open','name');
        $this->emit('alert','Datos Guardados','El Addicional fue agregado correctamente');
    }
    public function render()
    {
        return view('livewire.admin.additionals.additionals-create');
    }
}
