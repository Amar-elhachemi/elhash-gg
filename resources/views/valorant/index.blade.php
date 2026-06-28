
@extends('layouts.app')

@section('title','Valorant')

@push('styles')
    @vite('resources/css/pages/valorant.css')
@endpush

@section('content')

<section class="valorant-hero">

    <div class="hero-content">

        <span class="hero-badge">
            RIOT FPS TOOLS
        </span>

        <h1>VALORANT</h1>

        <p>
            Crosshair generator, pro settings, lineups, agents and
            competitive tools built for serious players.
        </p>

        <div class="hero-buttons">

            <a
                href="{{ route('valorant.crosshair') }}"
                class="primary-btn">

                🎯 Crosshair Generator

            </a>

            <a
                href="{{ route('valorant.prosettings') }}"
                class="secondary-btn">

                👑 Pro Settings

            </a>

        </div>

    </div>

</section>


<h2 class="section-title">
    Popular Tools
</h2>

<div class="valorant-dashboard">

    <a href="{{ route('valorant.crosshair') }}" class="valo-card red">

        <div class="icon">🎯</div>

        <h3>Crosshair Generator</h3>

        <p>Create and import professional crosshairs.</p>

    </a>

    <a href="{{ route('valorant.prosettings') }}" class="valo-card blue">

        <div class="icon">👑</div>

        <h3>Pro Settings</h3>

        <p>Browse settings used by professionals.</p>

    </a>

    <a href="{{ route('valorant.agents') }}" class="valo-card green">

        <div class="icon">🧑</div>

        <h3>Agents</h3>

        <p>Discover every Valorant agent.</p>

    </a>

    <a href="{{ route('valorant.lineups') }}" class="valo-card purple">

        <div class="icon">🗺</div>

        <h3>Lineups</h3>

        <p>Smoke, molly and flash lineups.</p>

    </a>

</div>

@endsection

