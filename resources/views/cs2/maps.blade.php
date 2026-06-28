@extends('layouts.app')

@section('title','CS2 Maps')

@section('content')

<x-page-header
    title="🗺️ Counter-Strike 2 Maps"
    description="Browse every Active Duty map with previews and information."
/>

<div class="container maps-page">

    <div class="maps-search">

        <input
            id="mapSearch"
            type="text"
            placeholder="Search maps...">

    </div>

    <div class="maps-grid">

        @php

        $maps = [

            ['mirage','Mirage'],
            ['dust2','Dust II'],
            ['inferno','Inferno'],
            ['nuke','Nuke'],
            ['ancient','Ancient'],
            ['anubis','Anubis'],

        ];

        @endphp

        @foreach($maps as $map)

        <div class="map-card">

            <img
                src="{{ asset('images/maps/'.$map[0].'.jpg') }}"
                alt="{{ $map[1] }}">

            <div class="map-overlay">

                <h2>{{ $map[1] }}</h2>

                <p>Active Duty Map</p>

                <a
    href="{{ route('cs2.map',$map[0]) }}"
    class="primary-btn">

    Open Map →

</a>

            </div>

        </div>

        @endforeach

    </div>

</div>

@endsection

@push('scripts')
@vite('resources/js/cs2/maps.js')
@endpush

