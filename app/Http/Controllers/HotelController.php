<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.hotels.index')->only('index');
    }


    public function index(){
        return view('admin.hotels.index');
    }

    public function show($id){
        return view('admin.hotels.show', [
            'agency' => Agency::findOrFail($id)
        ]);
    }

}
