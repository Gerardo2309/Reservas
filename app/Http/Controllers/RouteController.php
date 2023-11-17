<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
   /* public function __construct()
    {
        $this->middleware('can:admin.routes.index')->only('index');
        //$this->middleware('can:admin.tours.show')->only('show');
    }*/


    public function index(){
        return view('admin.routes.index');
    }


    /*public function show(Tour $tour){
        return view('admin.tours.show',compact('tour'));
    }*/
}
