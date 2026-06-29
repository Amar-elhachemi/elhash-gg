<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Crosshair;
use App\Models\Player;

class CrosshairController extends Controller
{
    public function index()
    {
        $crosshairs = Crosshair::with('player')->latest()->get();

        return view('admin.crosshairs.index', compact('crosshairs'));
    }

    public function create()
    {
        $players = Player::orderBy('nickname')->get();

        return view('admin.crosshairs.create', compact('players'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([

            'player_id' => 'required',

            'name' => 'required',

            'code' => 'required',

            'color' => 'nullable',

            'size' => 'required',

            'gap' => 'required',

            'thickness' => 'required',

            'outline' => 'nullable',

            'dot' => 'nullable',

        ]);

        $validated['outline'] = $request->has('outline');
        $validated['dot'] = $request->has('dot');

        Crosshair::create($validated);

        return redirect()->route('admin.crosshairs');
    }
}
