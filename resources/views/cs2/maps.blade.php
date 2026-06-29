@extends('layouts.app')

@section('title','CS2 Maps')

@section('content')

<x-page-header
    title="🗺️ Counter-Strike 2 Maps"
    description="Browse every Counter-Strike 2 map available on ELHASH.GG."
/>

<div class="container maps-page">

    <div class="maps-search">

        <input
            id="mapSearch"
            type="text"
            placeholder="Search maps...">

    </div>

    @if($maps->isEmpty())

        <div class="empty-state">

            <h2>No Maps Found</h2>

            <p>Add maps from the Admin Panel.</p>

        </div>

    @else

    <div class="maps-grid">

        @foreach($maps as $map)

            <div class="map-card">

                <img
                    src="{{ $map->image ?: asset('images/maps/default.jpg') }}"
                    alt="{{ $map->name }}">

                <div class="map-overlay">

                    <span class="badge">

                        {{ $map->difficulty }}

                    </span>

                    <h2>

                        {{ $map->name }}

                    </h2>

                    <p>

                        {{ \Illuminate\Support\Str::limit($map->description,80) }}

                    </p>

                    <a
                        href="{{ route('cs2.map',$map->slug) }}"
                        class="primary-btn">

                        Open Map →

                    </a>

                </div>

            </div>

        @endforeach

    </div>

    @endif

</div>

@endsection

@push('scripts')
    @vite('resources/js/cs2/maps.js')
@endpush
