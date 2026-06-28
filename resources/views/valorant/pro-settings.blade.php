@extends('layouts.app')

@section('title','Valorant Pro Settings')

@push('styles')
    @vite('resources/css/pages/valorant.css')
@endpush

@section('content')

<x-page-header
    title="👑 Valorant Pro Settings"
    description="Browse professional Valorant player settings."
/>

<div class="search-bar">

    <input
        id="valorantSearch"
        type="text"
        placeholder="Search player or team...">

</div>

<div class="valorant-player-grid">

    @php

        $players = [

            ['TenZ','Sentinels','🇨🇦'],
            ['aspas','MIBR','🇧🇷'],
            ['Derke','Vitality','🇫🇮'],
            ['ZmjjKK','EDward Gaming','🇨🇳'],
            ['f0rsakeN','Paper Rex','🇮🇩'],
            ['Chronicle','Fnatic','🇷🇺'],
            ['Boaster','Fnatic','🇬🇧'],
            ['leaf','G2 Esports','🇺🇸']

        ];

    @endphp

    @foreach($players as $player)

    <div class="valorant-player-card">

        <div class="player-flag">

            {{ $player[2] }}

        </div>

        <h3>{{ $player[0] }}</h3>

        <p>{{ $player[1] }}</p>

        <button class="primary-btn">

            View Settings

        </button>

    </div>

    @endforeach

</div>

@endsection

@push('scripts')
    @vite('resources/js/valorant/search.js')
@endpush