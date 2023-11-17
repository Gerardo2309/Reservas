<?php

namespace App\Http\Livewire\Admin\Agencies;

use App\Models\Agency;
use Livewire\Component;
use Livewire\WithPagination;

class AgenciesIndex extends Component
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
        $agencies = Agency::where('name', 'LIKE', '%' . $this->search . '%')->paginate(5);

        return view('livewire.admin.agencies.agencies-index',compact('agencies'));
    }
}
