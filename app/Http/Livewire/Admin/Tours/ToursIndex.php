<?php

namespace App\Http\Livewire\Admin\Tours;

use App\Models\Tour;
use Livewire\Component;
use Livewire\WithPagination;

class ToursIndex extends Component
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
        if (auth()->user()->roles[0]->id == 3) {
            $tours = Tour::whereHas('agencies', function ($query) {
                $query->where('agency_id', auth()->user()->agencies[0]->id);
            })->where('name', 'LIKE', '%' . $this->search . '%')->paginate(4);
        }else{
            $tours = Tour::where('name', 'LIKE', '%' . $this->search . '%')->paginate(4);
        }


        return view('livewire.admin.tours.tours-index', compact('tours'));
    }
}
