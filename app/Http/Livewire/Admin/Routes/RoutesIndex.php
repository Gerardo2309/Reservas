<?php

namespace App\Http\Livewire\Admin\Routes;

use App\Models\Route;
use Livewire\Component;
use Livewire\WithPagination;

class RoutesIndex extends Component
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
            $routes = Route::whereHas('agencies', function ($query) {
                $query->where('agency_id', auth()->user()->agencies[0]->id);
            })->where('name', 'LIKE', '%' . $this->search . '%')->paginate(4);
        }else{
            $routes = Route::where('name', 'LIKE', '%' . $this->search . '%')->paginate(4);
        }
        return view('livewire.admin.routes.routes-index',compact('routes'));
    }
}
