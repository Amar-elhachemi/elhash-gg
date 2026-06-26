@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="hero">
    <div class="hero-content">

        <h1>
            The Ultimate Toolkit
            <br>
            For Competitive Gamers
        </h1>

        <p>
            Crosshairs. Lineups. Utilities. Statistics.
        </p>

        <a href="{{ route('cs2') }}" class="hero-button">
            Explore Tools
        </a>

    </div>
</section>

<section class="tools">

    <h2>Featured Tools</h2>

    <div class="tool-grid">

        <x-feature-card
            title="CS2 Tools"
            description="Crosshair Generator, Pro Settings, Config Generator and more."
            icon="🎯"
            route="cs2"/>

        <x-feature-card
            title="Valorant Tools"
            description="Crosshair Generator, Agent Guides and Lineups."
            icon="🎮"
            route="valorant"/>

        <x-feature-card
            title="Gaming Utilities"
            description="Sensitivity Converter, FPS Calculator and more."
            icon="⚡"
            route="utilities"/>

    </div>

</section>

@endsection