<?php

namespace App\Http\Controllers;

class ValorantController extends Controller
{
    public function index()
    {
        return view('valorant.index');
    }

    public function crosshair()
    {
        return view('valorant.crosshair-generator');
    }

    public function proSettings()
    {
        return view('valorant.pro-settings');
    }

    public function agents()
    {
        return view('valorant.agents');
    }

    public function lineups()
    {
        return view('valorant.lineups');
    }
}