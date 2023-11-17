<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.tours.index')->only('index');
        $this->middleware('can:admin.tours.show')->only('show');
    }


    public function index(){
        return view('admin.tours.index');
    }


    public function show(Tour $tour){
        return view('admin.tours.show',compact('tour'));
    }
}
