@extends('layouts.app')

@section('title', 'CS2 Crosshair Generator')

@push('styles')
    @vite('resources/css/cs2/crosshair.css')
@endpush

@section('content')

<x-page-header
    title="🎯 CS2 Crosshair Generator"
    description="Create, preview and export professional Counter-Strike 2 crosshairs." />

<div class="crosshair-container">

    <!-- Preview -->
    <div class="preview-panel">

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

    <!-- Controls -->
    <div class="controls-panel">

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

            <label for="color">Color</label>

            <input
                type="color"
                id="color"
                value="#00ff00">

        </div>

        <div class="checkbox-group">

            <label>
                <input type="checkbox" id="centerDot">
                Center Dot
            </label>

            <label>
                <input type="checkbox" id="outline">
                Outline
            </label>

        </div>

        <hr>

        <h2>👑 Professional Presets</h2>

        <div class="preset-grid">

            <button onclick="loadPreset('s1mple')">s1mple</button>
            <button onclick="loadPreset('donk')">donk</button>
            <button onclick="loadPreset('m0NESY')">m0NESY</button>
            <button onclick="loadPreset('ZywOo')">ZywOo</button>
            <button onclick="loadPreset('NiKo')">NiKo</button>
            <button onclick="loadPreset('ropz')">ropz</button>
            <button onclick="loadPreset('device')">device</button>
            <button onclick="loadPreset('frozen')">frozen</button>

        </div>

        <hr>

        <div class="action-buttons">

            <button
                class="primary-btn"
                id="copyConfig">

                📋 Copy Crosshair

            </button>

            <button class="secondary-btn">

                📥 Export CFG

            </button>

            <button class="secondary-btn">

                🔄 Reset

            </button>

        </div>

        <hr>

        <h2>📄 Generated Config</h2>

        <textarea
            id="configOutput"
            rows="8"
            readonly></textarea>

    </div>

</div>

@endsection

@push('scripts')
    @vite('resources/js/cs2/crosshair.js')
@endpush