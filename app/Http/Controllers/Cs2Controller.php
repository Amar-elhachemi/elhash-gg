<?php

namespace App\Http\Controllers;
use App\Models\Player;
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
        return view('cs2.maps');
    }

public function map($map)
{
    $maps = [
        'mirage',
        'dust2',
        'inferno',
        'nuke',
        'ancient',
        'anubis',
    ];

    abort_unless(in_array($map, $maps), 404);

    return view('cs2.map-details', compact('map'));
}
public function player($nickname)
{
    $player = Player::where('nickname',$nickname)->firstOrFail();

    return view('cs2.player',compact('player'));
}
public function crosshairPlayer($nickname)
{
    $player = Player::where('nickname',$nickname)->firstOrFail();

    return view('cs2.crosshair-generator',compact('player'));
}
}
