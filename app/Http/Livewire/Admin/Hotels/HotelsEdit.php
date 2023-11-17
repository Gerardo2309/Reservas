<?php

namespace App\Http\Livewire\Admin\Hotels;

use App\Models\Hotel;
use Livewire\Component;

class HotelsEdit extends Component
{
    public $open = false;
    public $hotel;
    public $name, $address, $position;
    protected $listeners = ['HotelsEdit:delete' => 'delete'];
    protected $rules = [
        'name' => 'required',
        'address' => 'required',
        'position' => 'required',
    ];
    
    public function mount(Hotel $hotel)
    {
        $this->hotel = $hotel;
        $this->name = $hotel->name;
        $this->address = $hotel->address;
        $this->position = $hotel->position;
    }

    public function edit()
    {
        // validate
        $this->validate();


        $this->hotel->update([
            'name' => $this->name,
            'address' => $this->address,
            'position' => $this->position,
        ]);


        $this->emit('render');
        $this->reset('open', 'name', 'address', 'position');
        $this->emit('swal:alert', [
            'icon'    => 'success',
            'message'   => 'The Hotel was edited correctly!!',
            'timeout' => 10000
        ]);
    }

    public function showConfirmation($id)
    {
        $this->emit("swal:confirm", [
            'icon'        => 'warning',
            'title'       => 'Are you sure?',
            'text'        => "You won't be able to revert this!",
            'confirmText' => 'Yes, delete!',
            'method'      => 'HotelsEdit:delete',
            'params'      => $id, // optional, send params to success confirmation
            'callback'    => '', // optional, fire event if no confirmed
        ]);
    }

    public function delete(Hotel $hotel)
    {
        $hotel->delete();
        $this->emit('render');
        $this->emit('swal:alert', [
            'icon'    => 'success',
            'message'   => 'The hotel was successfully removed!!',
            'timeout' => 10000
        ]);
    }
    
    public function render()
    {
        return view('livewire.admin.hotels.hotels-edit');
    }   
}
