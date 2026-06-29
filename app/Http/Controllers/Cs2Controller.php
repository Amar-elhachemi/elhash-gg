<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Map;
class Cs2Controller extends Controller
{
    public function index()
    {
        return view('cs2.index');
    }

    public function crosshair()
    {
        return view('cs2.crosshair-generator');
    }

    public function config()
    {
        return view('cs2.config-generator');
    }

    public function proSettings()
{
    $players = \App\Models\Player::orderBy('nickname')->get();

    return view('cs2.pro-settings', compact('players'));
}

    public function maps()
{
    $maps = Map::where('game', 'CS2')
        ->orderBy('name')
        ->get();

    return view('cs2.maps', compact('maps'));
}


public function map($slug)
{
    $map = Map::where('slug', $slug)
        ->where('game', 'CS2')
        ->firstOrFail();

    return view('cs2.map-details', compact('map'));
}


public function player($nickname)
{
    $player = Player::where('nickname',$nickname)->firstOrFail();

    return view('cs2.player',compact('player'));
}

public function crosshairPlayer($nickname)
{
    $player = Player::with('crosshairs')
        ->where('nickname', $nickname)
        ->firstOrFail();

    $crosshair = $player->crosshairs->first();

    return view('cs2.crosshair-player', compact(
        'player',
        'crosshair'
    ));
}



public function adminPlayers()
{
    $players = Player::latest()->get();

    return view('admin.players.index', compact('players'));
}

public function createPlayer()
{
    return view('admin.players.create');
}

public function storePlayer(Request $request)
{
    $validated = $request->validate([

        'nickname' => 'required|unique:players',

        'team' => 'required',

        'country' => 'required',

        'game' => 'required',

        'dpi' => 'required',

        'sensitivity' => 'required',

        'resolution' => 'required',

        'refresh_rate' => 'required',

    ]);

    Player::create($validated);

    return redirect()
        ->route('admin.players')
        ->with('success','Player created successfully.');
}

public function editPlayer(Player $player)
{
    return view('admin.players.edit', compact('player'));
}

public function updatePlayer(Request $request, Player $player)
{
    $validated = $request->validate([

        'nickname' => 'required',

        'team' => 'required',

        'country' => 'required',

        'game' => 'required',

        'dpi' => 'required',

        'sensitivity' => 'required',

        'resolution' => 'required',

        'refresh_rate' => 'required',

    ]);

    $player->update($validated);

    return redirect()
        ->route('admin.players')
        ->with('success','Player updated.');
}

public function destroyPlayer(Player $player)
{
    $player->delete();

    return redirect()
        ->route('admin.players')
        ->with('success','Player deleted successfully.');
}

}
