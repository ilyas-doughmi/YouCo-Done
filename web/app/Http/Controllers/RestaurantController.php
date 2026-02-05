<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\restaurant;
use Illuminate\Support\Facades\Auth;
class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('restaurateur.restaurants.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('restaurateur.restaurants.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'cuisine' => 'required',
            'capacity' => 'required',
            'description' => 'required',
        ]);

        restaurant::create([
            'nom' => $request->name,
            'description' => $request->description,
            'userId' => Auth::user()->id,
            'categorie' => $request->cuisine,
            'localisation' => $request->address,
            'capacite' => $request->capacity,
            'isActive' => true,
            'isDeleted' => false,
        ]);
        return redirect()->route('restaurants.index');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        return view('restaurateur.restaurants.edit');
    }

    public function update(Request $request, string $id)
    {
        // Update logic will go here
        return redirect()->route('restaurants.index');
    }

    public function destroy(string $id)
    {
        return redirect()->route('restaurants.index');
    }
}
