<?php

namespace App\Http\Controllers\Backend;


use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertyController extends Controller
{
    public function index()
    {

        $properties = Property::where('availability_date', '>=', date('Y-m-d'))->get();

        return view('properties.index', compact('properties'));
    }

    

    public function show(Property $property)
    {

        return view('properties.show', compact('property'));
    }
}
