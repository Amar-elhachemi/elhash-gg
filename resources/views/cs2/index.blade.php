```blade
@extends('layouts.app')

@section('title', 'Counter-Strike 2')

@section('content')

<x-page-header
    title="🎮 Counter-Strike 2"
    description="Professional tools, generators and resources built for every CS2 player."
/>

<section class="dashboard-page">

    <div class="container">

        <div class="dashboard-grid">

            <x-tool-card
                title="Crosshair Generator"
                description="Create, preview, import and export professional crosshairs."
                icon="🎯"
                route="cs2.crosshair"/>

            <x-tool-card
                title="Config Generator"
                description="Generate complete CS2 autoexec and practice configs."
                icon="⚙️"
                route="cs2.config"/>

            <x-tool-card
                title="Professional Settings"
                description="Browse settings used by the world's best players."
                icon="👑"
                route="cs2.prosettings"/>

            <x-tool-card
                title="Maps"
                description="Interactive competitive maps with callouts and utilities."
                icon="🗺️"
                route="cs2.maps"/>

        </div>

        <div class="dashboard-section">

            <x-panel>

                <h2 class="panel-title">
                    🚀 What's inside ELHASH.GG
                </h2>

                <div class="feature-grid">

                    <div class="feature-item">
                        <span>🎯</span>
                        <div>
                            <h3>Crosshair Builder</h3>
                            <p>Create and export tournament-ready crosshairs.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span>⚙️</span>
                        <div>
                            <h3>CFG Builder</h3>
                            <p>Create complete autoexec and practice configurations.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span>👑</span>
                        <div>
                            <h3>Pro Database</h3>
                            <p>Crosshairs, configs, resolutions and peripherals.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span>🗺️</span>
                        <div>
                            <h3>Interactive Maps</h3>
                            <p>Callouts, smokes, flashes and executes.</p>
                        </div>
                    </div>

                </div>

            </x-panel>

        </div>

        <div class="dashboard-section">

            <x-panel>

                <h2 class="panel-title">
                    🛣 Development Roadmap
                </h2>

                <div class="roadmap">

                    <div class="roadmap-item completed">
                        <span>✅</span>
                        <div>
                            <h3>Crosshair Generator</h3>
                            <p>Completed and fully functional.</p>
                        </div>
                    </div>

                    <div class="roadmap-item">
                        <span>🟠</span>
                        <div>
                            <h3>Config Generator</h3>
                            <p>Coming in the next development sprint.</p>
                        </div>
                    </div>

                    <div class="roadmap-item">
                        <span>🟠</span>
                        <div>
                            <h3>Professional Settings</h3>
                            <p>Player database with filters and search.</p>
                        </div>
                    </div>

                    <div class="roadmap-item">
                        <span>🟠</span>
                        <div>
                            <h3>Interactive Maps</h3>
                            <p>Smokes, flashes, executes and callouts.</p>
                        </div>
                    </div>

                </div>

            </x-panel>

        </div>

    </div>

</section>

@endsection
```
