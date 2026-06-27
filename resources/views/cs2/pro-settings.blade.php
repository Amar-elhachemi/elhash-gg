@extends('layouts.app')

@section('title', 'CS2 Pro Settings')

@section('content')

<x-page-header
    title="👑 Professional Player Settings"
    description="Browse the settings used by the world's best Counter-Strike 2 players."
/>

<div class="container pro-page">

    <div class="search-bar">

        <input
            id="playerSearch"
            type="text"
            placeholder="Search player, team or country...">

    </div>

    <div class="player-grid">

        @foreach([
            ['donk','🇷🇺','Team Spirit'],
            ['m0NESY','🇺🇦','Falcons'],
            ['ZywOo','🇫🇷','Vitality'],
            ['NiKo','🇧🇦','Falcons'],
            ['ropz','🇪🇪','Vitality'],
            ['s1mple','🇺🇦','FaZe'],
            ['frozen','🇸🇰','FaZe'],
            ['b1t','🇺🇦','NAVI'],
            ['jL','🇱🇹','NAVI'],
            ['broky','🇱🇻','FaZe'],
            ['torzsi','🇭🇺','MOUZ'],
            ['xertioN','🇮🇱','MOUZ']
        ] as $player)

        <div class="pro-card">

            <div class="pro-header">

                <div class="flag">{{ $player[1] }}</div>

                <div>

                    <h3>{{ $player[0] }}</h3>

                    <small>{{ $player[2] }}</small>

                </div>

            </div>

            <div class="pro-body">

                <div><strong>DPI</strong><span>400</span></div>

                <div><strong>Sensitivity</strong><span>1.80</span></div>

                <div><strong>Resolution</strong><span>1280×960</span></div>

                <div><strong>Refresh</strong><span>360 Hz</span></div>

            </div>

            <a
                href="{{ route('cs2.crosshair') }}"
                class="btn btn-primary">

                View Crosshair →

            </a>

        </div>

        @endforeach

    </div>

</div>

@endsection

