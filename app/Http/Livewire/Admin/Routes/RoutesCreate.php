<?php

namespace App\Http\Livewire\Admin\Routes;

use App\Models\Image as ModelsImage;
use App\Models\Route;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;


class RoutesCreate extends Component
{
    use WithFileUploads;
    public $open = false;
    public $name, $short_descrip,$icon;
    protected $rules = [
        'name' => 'required',
        'short_descrip' => 'required',
        'icon' => 'required',
    ];

   public function create()
    {
        $this->validate();

        Route::create([
            'name' => $this->name,
            'short_descrip' => $this->short_descrip,
            'icon' => $this->icon,
        ]);
        $this->emit('render');
        $this->reset('open', 'name', 'short_descrip', 'icon');
        $this->emit('swal:alert', [
            'icon'    => 'success',
            'message'   => 'The Route was successfully added!!',
            'timeout' => 10000
        ]);
    }

    public function render()
    {
        return view('livewire.admin.routes.routes-create');
    }
}
