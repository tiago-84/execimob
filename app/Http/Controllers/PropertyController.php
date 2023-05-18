<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = DB::select("SELECT * FROM properties");
        return view('property.index')->with('properties', $properties);
    }

    public function create()
    {
        return view('property.create');
    }

    public function store(Request $request)
    {
        var_dump($request);
    }
}
