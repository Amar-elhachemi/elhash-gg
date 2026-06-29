<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Map;
use Illuminate\Support\Str;

class MapController extends Controller
{
    public function index()
    {
        $maps = Map::latest()->get();

        return view('admin.maps.index', compact('maps'));
    }

    public function create()
    {
        return view('admin.maps.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([

            'name'=>'required|max:100',

            'game'=>'required',

            'image'=>'nullable',

            'description'=>'nullable',

            'difficulty'=>'required',

        ]);

        $validated['slug']=Str::slug($validated['name']);

        Map::create($validated);

        return redirect()->route('admin.maps');
    }

    public function edit(Map $map)
    {
        return view('admin.maps.edit',compact('map'));
    }

    public function update(Request $request, Map $map)
    {
        $validated=$request->validate([

            'name'=>'required|max:100',

            'game'=>'required',

            'image'=>'nullable',

            'description'=>'nullable',

            'difficulty'=>'required',

        ]);

        $validated['slug']=Str::slug($validated['name']);

        $map->update($validated);

        return redirect()->route('admin.maps');
    }

    public function destroy(Map $map)
    {
        $map->delete();

        return redirect()->route('admin.maps');
    }
}