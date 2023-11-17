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
    public $name,  $slug, $description, $file = [];
    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'file' => 'required',
    ];


    public function removeMe($index)
    {
            array_splice($this->file, $index, 1);
    }

   public function create()
    {
        $this->validate();

        //$this->slug = Str::slug($this->name);

        $route = Route::create([
            'name' => $this->name,
           // 'slug' => $this->slug,
            'description' => $this->description,
        ]);
        if ($route->id != null) {
            foreach ($this->file as $image) {
                $fileName = $this->name . '-' . substr(uniqid(rand(), true), 8, 8) . '.' . $image->getClientOriginalExtension();
                $idmiage = ModelsImage::create([
                    'url' => 'storage/photos/' . $fileName,
                    'imageable_id' => $route->id,
                    'imageable_type' => 'App\Models\Route',
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
        $this->reset('open', 'name', 'slug',  'description','file');
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
