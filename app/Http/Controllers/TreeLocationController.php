<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TreeLocation;


class TreeLocationController extends Controller
{
    public function index()
    {
        $locations = TreeLocation::all();
        return view('locations.index', compact('locations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'lat' => 'required|numeric',
            'lng' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        TreeLocation::create([
            'name' => $request->name,
            'latitude' => $request->lat,
            'longitude' => $request->lng,
            'description' => $request->description,
        ]);

        return redirect()->route('locations.index')->with('success', 'Location added successfully!');
    }
}
