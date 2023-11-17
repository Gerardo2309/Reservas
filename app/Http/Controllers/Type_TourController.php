<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Type_TourController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.type-tours.index')->only('index');
    }


    public function index(){
        return view('admin.tours.type_tours.index');
    }
}
