<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    public function AdminDashboard()
    {
        return view('admin.admin_dashboard');
    }




    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }


    public function AdminLogin(){

        return view('admin.admin_login');

    }

    public function createProperty()
    {
        return view('admin.properties.create');
    }

    public function storeProperty(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string',
        'title' => 'required|string',
        'description' => 'required|string',
        'image' => 'required|image',
        'availability_date' => 'required|date',
    ]);

    $imagePath = $request->file('image')->store('uploads', 'public');


    $validatedData['image'] = $imagePath;


    $property = Property::create($validatedData);

    return redirect()->route('show.property')->with('success', 'Property created successfully!');
}



    public function showProperty()
    {
        $properties = Property::all();


        return view('admin.properties.index', ['properties' => $properties]);

    }





}
