<?php

namespace App\Http\Controllers;

class UtilitiesController extends Controller
{
    public function index()
    {
        return view('utilities.index');
    }

    public function sensitivity()
    {
        return view('utilities.sensitivity-converter');
    }

    public function fps()
    {
        return view('utilities.fps-calculator');
    }

    public function monitor()
    {
        return view('utilities.monitor-distance');
    }

    public function config()
    {
        return view('utilities.config-converter');
    }
}