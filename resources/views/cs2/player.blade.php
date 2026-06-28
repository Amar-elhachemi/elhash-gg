@extends('layouts.app')

@section('title',$player->nickname)

@section('content')

<x-page-header
:title="'👑 '.$player->nickname"
:description="$player->team"
/>

<div class="container">

    <div class="player-hero">

    <img
        src="{{ asset('images/'.$player->avatar) }}"
        alt="{{ $player->nickname }}">

    <div class="player-meta">

        <h1>{{ $player->nickname }}</h1>

        <p>{{ $player->team }}</p>

        <span class="country">
            {{ $player->country }}
        </span>

    </div>

</div>

    <div class="dashboard-grid">

        <x-panel>

            <h2>Player Information</h2>

            <table>

                <tr><td>DPI</td><td>{{ $player->dpi }}</td></tr>

                <tr><td>Sensitivity</td><td>{{ $player->sensitivity }}</td></tr>

                <tr><td>Resolution</td><td>{{ $player->resolution }}</td></tr>

                <tr><td>Refresh</td><td>{{ $player->refresh_rate }} Hz</td></tr>

                <tr><td>Mouse</td><td>{{ $player->mouse }}</td></tr>

                <tr><td>Keyboard</td><td>{{ $player->keyboard }}</td></tr>

                <tr><td>Monitor</td><td>{{ $player->monitor }}</td></tr>

            </table>

        </x-panel>

        <x-panel>

            <h2>Crosshair</h2>

            <textarea rows="8" readonly>{{ $player->crosshair }}</textarea>
            <a
    href="{{ route('cs2.crosshair.player',$player->nickname) }}"
    class="primary-btn">

    Load in Generator →

</a>

        </x-panel>

    </div>

</div>

@endsection