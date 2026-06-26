@extends('layouts.app')

@section('title', 'CS2 Crosshair Generator')

@push('styles')
    @vite('resources/css/cs2/crosshair.css')
@endpush

@section('content')

<x-page-header
    title="🎯 CS2 Crosshair Generator"
    description="Create, preview and export professional Counter-Strike 2 crosshairs."
/>

<div class="crosshair-container">

    <!-- ========================= -->
    <!-- PREVIEW -->
    <!-- ========================= -->

    <div class="preview-panel">

        <div class="preview-header">

            <h2>Live Preview</h2>

            <div class="preview-actions">

    <button class="map-btn active" data-map="mirage">Mirage</button>

    <button class="map-btn" data-map="dust2">Dust II</button>

    <button class="map-btn" data-map="inferno">Inferno</button>

    <button class="map-btn" data-map="nuke">Nuke</button>

    <button class="map-btn" data-map="ancient">Ancient</button>

    <button class="map-btn" data-map="anubis">Anubis</button>

</div>

        </div>

        <div class="preview-screen">

            <div id="crosshair-preview">

                <div class="arm top"></div>
                <div class="arm bottom"></div>
                <div class="arm left"></div>
                <div class="arm right"></div>

                <div id="center-dot"></div>

            </div>

        </div>

    </div>

    <!-- ========================= -->
    <!-- CONTROLS -->
    <!-- ========================= -->

    <div class="controls-panel">

        <div class="panel-section">

            <h2>⚙ Crosshair Settings</h2>

            <div class="control-group">

                <label>

                    Size

                    <span id="sizeValue">2</span>

                </label>

                <input
                    type="range"
                    id="size"
                    min="1"
                    max="10"
                    value="2">

            </div>

            <div class="control-group">

                <label>

                    Thickness

                    <span id="thicknessValue">1</span>

                </label>

                <input
                    type="range"
                    id="thickness"
                    min="0.5"
                    max="5"
                    step="0.5"
                    value="1">

            </div>

            <div class="control-group">

                <label>

                    Gap

                    <span id="gapValue">-3</span>

                </label>

                <input
                    type="range"
                    id="gap"
                    min="-5"
                    max="10"
                    value="-3">

            </div>

            <div class="control-group">

                <label>Color</label>

                <input
                    type="color"
                    id="color"
                    value="#00ff00">

            </div>

            <div class="quick-colors">

                <button class="color green" data-color="#00ff00"></button>
                <button class="color red" data-color="#ff3b30"></button>
                <button class="color blue" data-color="#3b82f6"></button>
                <button class="color yellow" data-color="#facc15"></button>
                <button class="color white" data-color="#ffffff"></button>
                <button class="color purple" data-color="#a855f7"></button>

            </div>

            <div class="checkbox-group">

                <label>

                    <input
                        type="checkbox"
                        id="centerDot">

                    Center Dot

                </label>

                <label>

                    <input
                        type="checkbox"
                        id="outline">

                    Outline

                </label>

            </div>

        </div>

        <hr>

        <div class="panel-section">

            <div class="players-header">

                <h2>👑 Professional Players</h2>

                <input
                    type="text"
                    id="playerSearch"
                    placeholder="Search player...">

            </div>

            <div class="players-grid">

                <button class="player-card" data-player="donk">
                    <strong>🇷🇺 donk</strong>
                    <small>Team Spirit</small>
                </button>

                <button class="player-card" data-player="m0NESY">
                    <strong>🇺🇦 m0NESY</strong>
                    <small>Falcons</small>
                </button>

                <button class="player-card" data-player="ZywOo">
                    <strong>🇫🇷 ZywOo</strong>
                    <small>Vitality</small>
                </button>

                <button class="player-card" data-player="NiKo">
                    <strong>🇧🇦 NiKo</strong>
                    <small>Falcons</small>
                </button>

                <button class="player-card" data-player="ropz">
                    <strong>🇪🇪 ropz</strong>
                    <small>Vitality</small>
                </button>

                <button class="player-card" data-player="s1mple">
                    <strong>🇺🇦 s1mple</strong>
                    <small>FaZe</small>
                </button>

            </div>

        </div>

        <hr>

        <div class="panel-section">

            <h2>📋 Actions</h2>

            <div class="action-buttons">

                <button
                    id="copyConfig"
                    class="primary-btn">

                    📋 Copy Crosshair

                </button>

                <button
                    id="resetCrosshair"
                    class="secondary-btn">

                    🔄 Reset

                </button>

                <button
                    id="exportCFG"
                    class="secondary-btn">

                    📥 Export CFG

                </button>

            </div>

        </div>

        <hr>

        <div class="panel-section">

            <h2>📄 Generated Config</h2>

            <textarea
                id="configOutput"
                rows="10"
                readonly></textarea>

        </div>

    </div>

</div>

@endsection

@push('scripts')
    @vite('resources/js/cs2/crosshair.js')
@endpush