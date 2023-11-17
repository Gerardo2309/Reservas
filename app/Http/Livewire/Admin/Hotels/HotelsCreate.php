<?php

namespace App\Http\Livewire\Admin\Hotels;

use App\Models\Hotel;
use Livewire\Component;

class HotelsCreate extends Component
{
    public $open = false;
    public $name,$address,$position;
    protected $rules = [
        'name' => 'required',
        'address' => 'required',
        'position' => 'required',
    ];
    public function create(){
        $this->validate();


       Hotel::create([
            'name' => $this->name,
            'address' => $this->address,
            'position' => $this->position,
        ]);


        $this->emit('render');
        $this->reset('open','name','address','position');
        $this->emit('swal:alert', [
            'icon'    => 'success',
            'message'   => 'The Hotel was successfully added!!',
            'timeout' => 10000
        ]);
    }
    public function render()
    {
        return view('livewire.admin.hotels.hotels-create');
    }
}
