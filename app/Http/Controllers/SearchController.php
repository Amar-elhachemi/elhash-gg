<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = strtolower($request->q);

        $items = collect([

            [
                'title'=>'CS2 Crosshair Generator',
                'route'=>route('cs2.crosshair')
            ],

            [
                'title'=>'CS2 Pro Settings',
                'route'=>route('cs2.prosettings')
            ],

            [
                'title'=>'Valorant Crosshair Generator',
                'route'=>route('valorant.crosshair')
            ],

            [
                'title'=>'Valorant Agents',
                'route'=>route('valorant.agents')
            ],

            [
                'title'=>'Valorant Lineups',
                'route'=>route('valorant.lineups')
            ],

            [
                'title'=>'Valorant Pro Settings',
                'route'=>route('valorant.prosettings')
            ],

            [
                'title'=>'Sensitivity Converter',
                'route'=>route('utilities.sensitivity')
            ]

        ]);

        $results = $items->filter(function($item) use ($query){

            return str_contains(
                strtolower($item['title']),
                $query
            );

        });

        return view('search',compact('results','query'));
    }
}