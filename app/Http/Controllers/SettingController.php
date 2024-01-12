<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.type-tours.index')->only('index');
    }


    public function type_tour(){
        return view('admin.tours.type_tours.index');

    }

    public function additionals(){
        return view('admin.additionals.index');
    }
}
