<?php

namespace App\Http\Controllers;

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
        return view('cs2.pro-settings');
    }

    public function maps()
    {
        return view('cs2.maps');
    }
}