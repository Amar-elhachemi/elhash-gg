@extends('layouts.app')

@section('title','Valorant Lineups')

@push('styles')
    @vite('resources/css/pages/valorant.css')
@endpush

@section('content')

<x-page-header
    title="🗺 Valorant Lineups"
    description="Choose a map to explore lineups."
/>

@php

$maps=[

'Ascent',

'Bind',

'Haven',

'Split',

'Lotus',

'Sunset',

'Pearl',

'Icebox'

];

@endphp

<div class="lineup-grid">

@foreach($maps as $map)

<div class="lineup-card">

<h2>{{ $map }}</h2>

<p>

Smoke • Molly • Flash

</p>

<button class="primary-btn">

Coming Soon

</button>

</div>

@endforeach

</div>

@endsection
