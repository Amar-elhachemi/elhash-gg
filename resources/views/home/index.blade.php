@extends('layouts.app')

@section('title', 'ELHASH.GG - Competitive Gaming Toolkit')

@section('content')

<section class="hero">

    <div class="hero-grid"></div>

    <div class="container">

        <x-badge>

            🚀 Built for Competitive Gamers

        </x-badge>

        <h1>

            The Ultimate<br>

            Gaming Toolkit

        </h1>

        <p class="text-muted">

            Professional tools for Counter-Strike 2,
            Valorant and competitive FPS players.

            Everything in one place.

        </p>

        <div class="hero-buttons">

            <x-button href="{{ route('cs2') }}">

                Explore Tools →

            </x-button>

            <x-button
                href="{{ route('about') }}"
                type="secondary">

                Learn More

            </x-button>

        </div>

        <div class="hero-tags">

            <span>🎯 Crosshair</span>

            <span>⚙ Config</span>

            <span>🗺 Maps</span>

            <span>👑 Pro Settings</span>

        </div>

    </div>

</section>

<x-section>

    <x-container>

        <div class="section-title text-center">

            <x-badge>
                🎮 Platforms
            </x-badge>

            <h2 class="mt-3">
                Choose Your Game
            </h2>

            <p class="text-muted mt-2">
                Everything you need to dominate your favorite competitive game.
            </p>

        </div>

        <div class="grid grid-3 mt-5">

            <x-card class="game-card">

                <div class="game-header">

                    <div class="game-icon">
                        🎯
                    </div>

                    <div>

                        <h3>Counter-Strike 2</h3>

                        <span>Competitive FPS</span>

                    </div>

                </div>

                <ul class="game-features">

                    <li>✓ Crosshair Generator</li>

                    <li>✓ Config Generator</li>

                    <li>✓ Pro Settings</li>

                    <li>✓ Interactive Maps</li>

                </ul>

                <x-button
                    href="{{ route('cs2') }}"
                    class="w-100">

                    Open Dashboard →

                </x-button>

            </x-card>

            <x-card class="game-card">

                <div class="game-header">

                    <div class="game-icon">
                        💥
                    </div>

                    <div>

                        <h3>Valorant</h3>

                        <span>Riot Games</span>

                    </div>

                </div>

                <ul class="game-features">

                    <li>✓ Crosshair Generator</li>

                    <li>✓ Agents</li>

                    <li>✓ Lineups</li>

                    <li>✓ Team Utilities</li>

                </ul>

                <x-button
                    href="{{ route('valorant') }}"
                    class="w-100">

                    Open Dashboard →

                </x-button>

            </x-card>

            <x-card class="game-card">

                <div class="game-header">

                    <div class="game-icon">
                        🛠
                    </div>

                    <div>

                        <h3>Utilities</h3>

                        <span>Universal Tools</span>

                    </div>

                </div>

                <ul class="game-features">

                    <li>✓ FPS Calculator</li>

                    <li>✓ Sens Converter</li>

                    <li>✓ Config Converter</li>

                    <li>✓ More Coming Soon</li>

                </ul>

                <x-button
                    href="{{ route('utilities') }}"
                    class="w-100">

                    Open Tools →

                </x-button>

            </x-card>

        </div>

    </x-container>

</x-section>

<x-section>

    <x-container>

        <div class="section-title text-center">

            <x-badge>
                ⭐ Most Popular
            </x-badge>

            <h2 class="mt-3">
                Featured Tools
            </h2>

            <p class="text-muted mt-2">
                Powerful tools built to help you improve faster.
            </p>

        </div>

        <div class="grid grid-3 mt-5">

            <x-card class="featured-tool">

                <span class="tool-status">
                    Popular
                </span>

                <h3>
                    Crosshair Generator
                </h3>

                <p>

                    Create professional CS2 crosshairs with
                    live preview and instant console commands.

                </p>

                <div class="tool-footer">

                    <span>

                        ★★★★★

                    </span>

                    <x-button
                        href="{{ route('cs2.crosshair') }}">

                        Open →

                    </x-button>

                </div>

            </x-card>

            <x-card class="featured-tool">

                <span class="tool-status new">
                    Soon
                </span>

                <h3>
                    Config Generator
                </h3>

                <p>

                    Generate complete practice configs
                    in seconds.

                </p>

                <div class="tool-footer">

                    <span>

                        Practice

                    </span>

                    <x-button
                        href="{{ route('cs2.config') }}">

                        Explore →

                    </x-button>

                </div>

            </x-card>

            <x-card class="featured-tool">

                <span class="tool-status">
                    New
                </span>

                <h3>

                    Interactive Maps

                </h3>

                <p>

                    Learn every smoke, flash,
                    lineup and callout.

                </p>

                <div class="tool-footer">

                    <span>

                        Updated

                    </span>

                    <x-button
                        href="{{ route('cs2.maps') }}">

                        Open →

                    </x-button>

                </div>

            </x-card>

        </div>

    </x-container>

</x-section>

<x-section>

    <x-container>

        <div class="grid grid-4">

            <x-card class="tool-card text-center">

                <h2>10+</h2>

                <p>Gaming Tools</p>

            </x-card>

            <x-card class="tool-card text-center">

                <h2>100%</h2>

                <p>Free</p>

            </x-card>

            <x-card class="tool-card text-center">

                <h2>24/7</h2>

                <p>Available</p>

            </x-card>

            <x-card class="tool-card text-center">

                <h2>∞</h2>

                <p>Future Updates</p>

            </x-card>

        </div>

    </x-container>

</x-section>

<x-section>

    <x-container>

        <div class="section-title text-center">

            <x-badge>
                ⚡ Why Choose ELHASH.GG?
            </x-badge>

            <h2 class="mt-3">

                Built For Competitive Players

            </h2>

            <p class="text-muted mt-2">

                Everything is designed to help you improve faster,
                practice smarter and spend less time searching.

            </p>

        </div>

        <div class="grid grid-3 mt-5">

            <x-card class="why-card">

                <div class="why-icon">
                    ⚡
                </div>

                <h3>Lightning Fast</h3>

                <p>

                    No ads.
                    No clutter.
                    Open a tool and start playing immediately.

                </p>

            </x-card>

            <x-card class="why-card">

                <div class="why-icon">
                    🎯
                </div>

                <h3>Built for Gamers</h3>

                <p>

                    Every tool is created specifically for competitive
                    FPS players.

                </p>

            </x-card>

            <x-card class="why-card">

                <div class="why-icon">
                    🚀
                </div>

                <h3>Always Improving</h3>

                <p>

                    New features, tools and updates are constantly
                    being added.

                </p>

            </x-card>

        </div>

    </x-container>

</x-section>

<x-section class="cta-section">

    <x-container>

        <x-card class="cta-card">

            <div class="cta-content">

                <x-badge>

                    🚀 Ready to Level Up?

                </x-badge>

                <h2 class="mt-3">

                    Start Using ELHASH.GG Today

                </h2>

                <p class="text-muted mt-3">

                    Explore our growing collection of competitive gaming
                    tools and improve your gameplay.

                </p>

                <div class="hero-buttons mt-5">

                    <x-button href="{{ route('cs2') }}">

                        Explore CS2 →

                    </x-button>

                    <x-button
                        href="{{ route('valorant') }}"
                        type="secondary">

                        Valorant

                    </x-button>

                </div>

            </div>

        </x-card>

    </x-container>

</x-section>

@endsection