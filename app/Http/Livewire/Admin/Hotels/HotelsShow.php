<?php

namespace App\Http\Livewire\Admin\Hotels;

use App\Models\Agency;
use Livewire\Component;
use Livewire\WithPagination;

class HotelsShow extends Component
{
    use WithPagination;
    public $search;
    public $agency_hotel;
    protected $listeners = ['render'];
    
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function mount(Agency $agency)
    {
        $this->agency_hotel = $agency;

        
    }
    public function render()
    {
        $hotels = $this->agency_hotel->hotels()->where('name', 'LIKE', '%' . $this->search . '%')->paginate(5);
        return view('livewire.admin.hotels.hotels-show', compact('hotels'));
    }
}
