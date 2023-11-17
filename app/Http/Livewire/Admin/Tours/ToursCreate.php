<?php

namespace App\Http\Livewire\Admin\Tours;

use App\Models\Image as ModelsImage;
use App\Models\Tipo_tour;
use App\Models\Tour;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Intervention\Image\Facades\Image;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;


class ToursCreate extends Component
{
    use WithFileUploads;
    public $open = false;
    public $ttours;
    public $name,  $slug, $description, $tipo_tour_id, $file = [];
    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'tipo_tour_id' => 'required',
        'file' => 'required',
    ];


    public function removeMe($index)
    {
            array_splice($this->file, $index, 1);
    }

    public function mount()
    {
        $this->ttours = Tipo_tour::pluck("name", "id");
    }

    public function create()
    {
        $this->validate();

        $this->slug = Str::slug($this->name);

        $tour = Tour::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'tipo_tour_id' => $this->tipo_tour_id,
        ]);
        if ($tour->id != null) {
            foreach ($this->file as $image) {
                $fileName = $this->name . '-' . $this->tipo_tour_id . '-' . substr(uniqid(rand(), true), 8, 8) . '.' . $image->getClientOriginalExtension();
                $idmiage = ModelsImage::create([
                    'url' => 'storage/photos/' . $fileName,
                    'imageable_id' => $tour->id,
                    'imageable_type' => 'App\Models\Tour',
                ]);
                if ($idmiage != null) {
                    $img = Image::make($image->getRealPath())->encode('jpg', 65)->fit(760, null, function ($c) {
                        $c->aspectRatio();
                        $c->upsize();
                    });
                    $img->stream(); // <-- Key point
                    $ruta = Storage::disk('local')->put('public/photos' . '/' . $fileName, $img, 'public');
                }
            }
        }



        $this->emit('render');
        $this->reset('open', 'name', 'slug',  'description', 'tipo_tour_id','file',);
        $this->emit('swal:alert', [
            'icon'    => 'success',
            'message'   => 'The Tour was successfully added!!',
            'timeout' => 10000
        ]);
    }

    public function render()
    {
        return view('livewire.admin.tours.tours-create');
    }
}
