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

    @include('cs2.components.preview')

    @include('cs2.components.controls')

</div>

@endsection

@push('scripts')
    @vite('resources/js/cs2/crosshair.js')
@endpush