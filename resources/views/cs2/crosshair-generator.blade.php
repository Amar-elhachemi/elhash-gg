@extends('layouts.app')

@section('title', 'CS2 Crosshair Generator')

@push('styles')
    @vite('resources/css/cs2/crosshair.css')
@endpush

@section('content')

<x-page-header
    title="🎯 CS2 Crosshair Generator"
    description="Build, preview and export professional Counter-Strike 2 crosshairs."
/>

<div class="crosshair-container">

    <div class="left-column">

        @include('cs2.components.preview')

    </div>

    <div class="right-column">

        @include('cs2.components.controls')

    </div>

</div>

@endsection

@push('scripts')
    @vite('resources/js/cs2/crosshair.js')
@endpush