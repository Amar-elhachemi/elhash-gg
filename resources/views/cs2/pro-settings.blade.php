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

        @foreach($players as $player)

        <div class="pro-card">

            <div class="pro-header">

                <div class="flag">{{ $player->country }}</div>

                <div>

                    <h3>{{ $player->nickname }}</h3>

                    <small>{{ $player->team }}</small>

                </div>

            </div>

            <div class="pro-body">

                <div><strong>DPI</strong><span>{{ $player->dpi }}</span></div>

                <div><strong>Sensitivity</strong><span>{{ $player->sensitivity }}</span></div>

                <div><strong>Resolution</strong><span>{{ $player->resolution }}</span></div>

                <div><strong>Refresh</strong><span>{{ $player->refresh_rate }} Hz</span></div>

            </div>

            <a
                href="{{ route('cs2.player',$player->nickname) }}"
                class="btn btn-primary">

                View Crosshair →

            </a>

        </div>

        @endforeach

    </div>

</div>

@push('scripts')
    @vite('resources/js/cs2/search.js')
@endpush

@endsection