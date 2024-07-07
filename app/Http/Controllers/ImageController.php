<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class ImageController extends Controller
{
      //Funcion para procesar imageses
      public function store(Request $request){
        $images = $request->file('file');
        // Se genera un ID único para la images
        $nombreImages = Str::uuid() . '.' . $images->extension();
        
        // Procesa la images
        $imagesServidor = Image::make($images);
        // Recorta la images
        $imagesServidor->fit(1000, 1000);

        $imagesPath = public_path('uploads') . '/' . $nombreImages;
        $imagesServidor->save($imagesPath);
 
        return response()->json([
            'images' => $nombreImages
        ]);
    }
}

