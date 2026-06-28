@extends('layouts.app')

@section('title', ucfirst($map))

@section('content')

<x-page-header
    :title="'🗺️ '.ucfirst($map)"
    description="Interactive map page."
/>

<div class="container">

    <img
        src="{{ asset('images/maps/'.$map.'.jpg') }}"
        class="map-banner"
        alt="{{ $map }}">

    <div class="dashboard-grid">

        <x-panel>

            <h2>Bombsites</h2>

            <ul>

                <li>Bombsite A</li>
                <li>Bombsite B</li>

            </ul>

        </x-panel>

        <x-panel>

            <h2>Coming Soon</h2>

            <ul>

                <li>Smoke Lineups</li>
                <li>Flash Lineups</li>
                <li>Molotov Lineups</li>
                <li>Callouts</li>
                <li>Radar</li>

            </ul>

        </x-panel>

    </div>

</div>

@endsection