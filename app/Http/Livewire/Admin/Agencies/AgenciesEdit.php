<?php

namespace App\Http\Livewire\Admin\Agencies;

use App\Models\Agency;
use Livewire\Component;

class AgenciesEdit extends Component
{
    public $open = false;
    public $agency;
    public $name, $email, $phone, $address, $manager;
    protected $listeners = ['AgencyEdit:delete' => 'delete'];
    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'manager' => 'required',
    ];

    public function mount(Agency $agency)
    {
        $this->agency = $agency;
        $this->name = $agency->name;
        $this->email = $agency->email;
        $this->phone = $agency->phone;
        $this->address = $agency->address;
        $this->manager = $agency->manager;
    }

    public function edit()
    {
        // validate
        $this->validate();

        $this->agency->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'manager' => $this->manager,
        ]);


        $this->emit('render');
        $this->reset('open', 'name', 'email',  'phone', 'address', 'manager');
        $this->emit('swal:alert', [
            'icon'    => 'success',
            'message'   => 'The Agency was edited correctly!!',
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
            'method'      => 'AgencyEdit:delete',
            'params'      => $id, // optional, send params to success confirmation
            'callback'    => '', // optional, fire event if no confirmed
        ]);
    }

    public function delete(Agency $agency)
    {
        $agency->delete();
        $this->emit('render');
        $this->emit('swal:alert', [
            'icon'    => 'success',
            'message'   => 'The agency was successfully removed!!',
            'timeout' => 10000
        ]);
    }
    
    public function render()
    {
        return view('livewire.admin.agencies.agencies-edit');
    }
}
