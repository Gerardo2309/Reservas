<?php

namespace App\Http\Livewire\Admin\Agencies;

use App\Models\Agency;
use App\Models\Hotel;
use App\Models\Tour;
use Livewire\Component;

class AgenciesCreate extends Component
{
    public $open = false;
    public $selected = '';
    public $hotels,$tours;
    public $name,$email,$phone,$address,$manager,$hotel_id=[],$tour_id=[];
    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'manager' => 'required',
        'hotel_id' => 'required',
    ];
    public function mount()
    {
      $this->hotels = Hotel::pluck("name", "id");
      $this->tours = Tour::pluck("name", "id");
    }

    public function create(){
        $this->validate();

        $agency = Agency::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'manager' => $this->manager,
        ]);

        if($agency->id != null && $this->hotel_id != null){
            $agency->hotels()->sync($this->hotel_id);
            $agency->tours()->sync($this->tour_id);
        }

        $this->emit('render');
        $this->reset('open','name','email','phone','address','manager','hotel_id','tour_id');
        $this->emit('swal:alert', [
            'icon'    => 'success',
            'message'   => 'The agency was successfully added!!',
            'timeout' => 10000
        ]);
    }

    public function render()
    {
        return view('livewire.admin.agencies.agencies-create');
    }
}
