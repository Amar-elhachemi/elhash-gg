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

            <h2>Featured Tools</h2>

        </div>

        <div class="grid grid-4 mt-5">

            <x-card class="tool-card">

                <div class="icon">🎯</div>

                <h3>Crosshair Generator</h3>

                <p>Create and copy professional CS2 crosshairs.</p>

            </x-card>

            <x-card class="tool-card">

                <div class="icon">⚙</div>

                <h3>Config Generator</h3>

                <p>Create practice configs instantly.</p>

            </x-card>

            <x-card class="tool-card">

                <div class="icon">🗺</div>

                <h3>Interactive Maps</h3>

                <p>Learn every callout faster.</p>

            </x-card>

            <x-card class="tool-card">

                <div class="icon">📈</div>

                <h3>Sensitivity Tools</h3>

                <p>Convert sensitivity between games.</p>

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

@endsection