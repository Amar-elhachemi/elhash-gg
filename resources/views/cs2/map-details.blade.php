@extends('layouts.app')

@section('title', $map->name)

@section('content')

<x-page-header
    :title="'🗺️ '.$map->name"
    :description="$map->description ?: 'Counter-Strike 2 competitive map.'"
/>

<div class="container">

    <div class="map-hero">

        <img
            src="{{ $map->image ?: asset('images/maps/default.jpg') }}"
            alt="{{ $map->name }}"
            class="map-banner">

        <div class="map-info">

            <span class="badge">

                🎯 {{ $map->game }}

            </span>

            <span class="badge">

                ⭐ {{ $map->difficulty }}

            </span>

        </div>

    </div>

    <div class="dashboard-grid">

        <x-panel>

            <h2>Overview</h2>

            <p>

                {{ $map->description ?: 'No description available yet.' }}

            </p>

        </x-panel>

        <x-panel>

            <h2>Features</h2>

            <ul>

                <li>📍 Interactive Callouts (Coming Soon)</li>

                <li>💨 Smoke Lineups (Coming Soon)</li>

                <li>🔥 Molotov Lineups (Coming Soon)</li>

                <li>⚡ Flash Lineups (Coming Soon)</li>

                <li>🛰️ Radar (Coming Soon)</li>

            </ul>

        </x-panel>

        <x-panel>

            <h2>Statistics</h2>

            <ul>

                <li>Name: {{ $map->name }}</li>

                <li>Game: {{ $map->game }}</li>

                <li>Difficulty: {{ $map->difficulty }}</li>

                <li>Slug: {{ $map->slug }}</li>

            </ul>

        </x-panel>

    </div>

</div>

@endsection