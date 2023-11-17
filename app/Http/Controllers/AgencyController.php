<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.agencies.index')->only('index');
    }

    public function index()
    {
        return view('admin.agencies.index');
    }
}
