<?php

namespace App\Http\Livewire\Admin\Tours;

use App\Models\Tour;
use Livewire\Component;

class ToursShow extends Component
{

    public $tour;
    public $open = true;
    public $modal1 = false;

    public function mount($tour){
        $this->tour = $tour;

    }

    public function render()
    {
        return view('livewire.admin.tours.tours-show');
    }
}
