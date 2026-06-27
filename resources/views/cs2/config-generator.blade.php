```blade
@extends('layouts.app')

@section('title', 'CS2 Config Generator')

@section('content')

<x-page-header
    title="⚙️ CS2 Config Generator"
    description="Build professional Counter-Strike 2 configuration files in seconds."
/>

<div class="container config-page">

    <div class="config-grid">

        <x-panel>

            <h2 class="panel-title">Configuration Builder</h2>

            <div class="coming-card">

                <div class="coming-icon">🚧</div>

                <h3>Currently Under Development</h3>

                <p>
                    The Config Generator is currently being built and will allow you
                    to generate complete professional CS2 configuration files.
                </p>

            </div>

        </x-panel>

        <x-panel>

            <h2 class="panel-title">Planned Features</h2>

            <div class="feature-list">

                <div class="feature-row">
                    <span>✅</span>
                    Autoexec Generator
                </div>

                <div class="feature-row">
                    <span>✅</span>
                    Practice Config
                </div>

                <div class="feature-row">
                    <span>✅</span>
                    FPS Optimization
                </div>

                <div class="feature-row">
                    <span>✅</span>
                    Network Commands
                </div>

                <div class="feature-row">
                    <span>✅</span>
                    Audio Settings
                </div>

                <div class="feature-row">
                    <span>✅</span>
                    Video Settings
                </div>

                <div class="feature-row">
                    <span>✅</span>
                    Export CFG
                </div>

                <div class="feature-row">
                    <span>✅</span>
                    Save Configs
                </div>

            </div>

        </x-panel>

    </div>

</div>

@endsection
```
