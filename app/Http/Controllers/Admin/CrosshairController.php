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
        $crosshairs = Crosshair::with('player')
            ->orderBy('created_at', 'desc')
            ->get();

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

            'player_id' => 'required|exists:players,id',

            'name' => 'required|max:100',

            'code' => 'required',

            'color' => 'nullable|max:30',

            'size' => 'required|numeric',

            'gap' => 'required|numeric',

            'thickness' => 'required|numeric',

            'outline' => 'nullable',

            'dot' => 'nullable',

        ]);

        $validated['outline'] = $request->has('outline');
        $validated['dot'] = $request->has('dot');

        Crosshair::create($validated);

        return redirect()
            ->route('admin.crosshairs')
            ->with('success', 'Crosshair created successfully.');
    }

    public function edit(Crosshair $crosshair)
    {
        $players = Player::orderBy('nickname')->get();

        return view(
            'admin.crosshairs.edit',
            compact('crosshair', 'players')
        );
    }

    public function update(Request $request, Crosshair $crosshair)
    {
        $validated = $request->validate([

            'player_id' => 'required|exists:players,id',

            'name' => 'required|max:100',

            'code' => 'required',

            'color' => 'nullable|max:30',

            'size' => 'required|numeric',

            'gap' => 'required|numeric',

            'thickness' => 'required|numeric',

            'outline' => 'nullable',

            'dot' => 'nullable',

        ]);

        $validated['outline'] = $request->has('outline');
        $validated['dot'] = $request->has('dot');

        $crosshair->update($validated);

        return redirect()
            ->route('admin.crosshairs')
            ->with('success', 'Crosshair updated successfully.');
    }

    public function destroy(Crosshair $crosshair)
    {
        $crosshair->delete();

        return redirect()
            ->route('admin.crosshairs')
            ->with('success', 'Crosshair deleted successfully.');
    }
}