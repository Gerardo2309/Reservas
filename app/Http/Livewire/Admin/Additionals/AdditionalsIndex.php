<?php

namespace App\Http\Livewire\Admin\Additionals;

use App\Models\Additional;
use Livewire\Component;

class AdditionalsIndex extends Component
{
    public $search;
    protected $listeners = ['render'];

    public function render()
    {
        $additionals = Additional::where('name', 'LIKE', '%' . $this->search . '%')->paginate(5);
        return view('livewire.admin.additionals.additionals-index',compact('additionals'));
    }
}
