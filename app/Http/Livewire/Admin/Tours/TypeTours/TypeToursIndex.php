<?php

namespace App\Http\Livewire\Admin\Tours\TypeTours;

use App\Models\Tipo_tour;
use Livewire\Component;

class TypeToursIndex extends Component
{
    public $search;
    protected $listeners = ['render'];

    public function render()
    {
        $ttours = Tipo_tour::where('name', 'LIKE', '%' . $this->search . '%')->paginate(5);

        return view('livewire.admin.tours.type-tours.type-tours-index',compact('ttours'));
    }
}
