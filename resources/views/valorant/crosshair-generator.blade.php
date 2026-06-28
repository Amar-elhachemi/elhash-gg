@extends('layouts.app')

@section('title','Valorant Crosshair Generator')

@push('styles')
    @vite('resources/css/pages/valorant.css')
@endpush

@section('content')

<x-page-header
    title="🎯 Valorant Crosshair Generator"
    description="Create, preview and copy professional Valorant crosshairs."
/>

<div class="valorant-grid">

    <div class="valorant-preview">

        <div class="crosshair-preview">

            <div class="crosshair">
                <span class="top"></span>
                <span class="left"></span>
                <span class="right"></span>
                <span class="bottom"></span>
                <span class="dot"></span>
            </div>

        </div>

    </div>

    <div class="valorant-controls">

        <x-panel>

            <h2>Crosshair</h2>

            <label>Color</label>

            <input
                type="color"
                id="color"
                value="#00ff88">

            <label>Thickness</label>

            <input
                type="range"
                id="thickness"
                min="1"
                max="6"
                value="2">

            <label>Length</label>

            <input
                type="range"
                id="length"
                min="2"
                max="12"
                value="6">

            <label>Gap</label>

            <input
                type="range"
                id="gap"
                min="0"
                max="8"
                value="3">

            <label>

                <input type="checkbox" id="dot">

                Center Dot

            </label>

        </x-panel>

        <x-panel>

            <h2>Generated Code</h2>

            <textarea
                id="crosshairCode"
                rows="6"
                readonly></textarea>

            <button
                id="copyCode"
                class="primary-btn">

                Copy Code

            </button>

        </x-panel>

    </div>

</div>

@endsection

@push('scripts')
    @vite('resources/js/valorant/crosshair.js')
@endpush

