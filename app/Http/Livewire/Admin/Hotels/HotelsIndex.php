<?php

namespace App\Http\Livewire\Admin\Hotels;

use App\Models\Hotel;
use Livewire\Component;
use Livewire\WithPagination;

class HotelsIndex extends Component
{
    use WithPagination;
    public $search;
    protected $listeners = ['render'];
    
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $hotels = Hotel::where('name', 'LIKE', '%' . $this->search . '%')->paginate(5);

        return view('livewire.admin.hotels.hotels-index',compact('hotels'));
    }
}
