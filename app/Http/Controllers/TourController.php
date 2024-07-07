<?php

namespace App\Http\Controllers;

use App\Models\Additional;
use App\Models\Image as ModelsImage;
use App\Models\Route;
use App\Models\Tipo_tour;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\RedirectResponse;



use Illuminate\Support\Facades\Storage;

class TourController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.tours.index')->only('index');
        $this->middleware('can:admin.tours.show')->only('show');
    }


    public function index()
    {
        return view('admin.tours.index');
    }

    public function create()
    {
        $ttours = Tipo_tour::pluck("name", "id");
        $rtours = Route::pluck("name", "id");
        $additionals = Additional::pluck("name", "id");
        return view('admin.tours.create', compact('ttours', 'rtours', 'additionals'));
    }


    public function store(Request $request)
    {
        //Validaciones de formulario
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'duration' => 'required',
            'short_descrip' => 'required',
            'description' => 'required',
            'maps' => 'required',
            'tipo_tour_id' => 'required',
            'route_tour_id' => 'required',
            'additionals' => 'required',
            'images'=>'required'
        ]);
        //Se hace el registro a la base de datos
        $slug = Str::slug($request->name);
        $tour = Tour::create([
            'name' => $request->name,
            'slug' => $slug,
            'price' => $request->price,
            'duration' => $request->duration,
            'short_descrip' => $request->short_descrip,
            'description' => $request->description,
            'maps' => $request->maps,
            'tipo_tour_id' => $request->tipo_tour_id,
        ]);
        foreach ($request->file('images') as $image) {
            $fileName = $request->name . '-' . $request->tipo_tour_id . '-' . substr(uniqid(rand(), true), 8, 8) . '.' . $image->getClientOriginalExtension();
            $idmiage = ModelsImage::create([
                'url' => 'storage/photos/' . $fileName,
                'imageable_id' => $tour->id,
                'imageable_type' => 'App\Models\Tour',
            ]);
            if ($idmiage != null) {
                $img = Image::make($image->getRealPath())->orientate()->encode('jpg', 65)->fit(760, null, function ($c) {
                    $c->aspectRatio();
                    $c->upsize();
                });
                $img->stream(); // <-- Key point
                $ruta = Storage::disk('local')->put('public/photos' . '/' . $fileName, $img, 'public');
            }
        }
        $tour->routes()->sync($request->route_tour_id);
        $tour->additionals()->sync($request->additionals);
        return redirect()->route('tours.index')->with('success','El Tour fue creado correctamente');//revisar 
    }

    public function show(Tour $tour)
    {
        return view('admin.tours.show', compact('tour'));
    }
}
