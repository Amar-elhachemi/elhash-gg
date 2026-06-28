@extends('layouts.app')

@section('title','Valorant Agents')

@push('styles')
    @vite('resources/css/pages/valorant.css')
@endpush

@section('content')

<x-page-header
    title="🧑 Valorant Agents"
    description="Browse every Valorant agent by role."
/>

@php

$roles=[

'Duelists'=>['Jett','Raze','Reyna','Phoenix','Neon','Iso','Yoru'],

'Initiators'=>['Sova','Fade','Skye','Breach','Gekko','KAY/O'],

'Controllers'=>['Omen','Brimstone','Viper','Harbor','Astra','Clove'],

'Sentinels'=>['Cypher','Killjoy','Sage','Chamber','Vyse']

];

@endphp

@foreach($roles as $role=>$agents)

<div class="role-section">

    <h2>{{ $role }}</h2>

    <div class="agent-grid">

        @foreach($agents as $agent)

        <div class="agent-card">

            <div class="agent-icon">

                {{ strtoupper(substr($agent,0,1)) }}

            </div>

            <h3>{{ $agent }}</h3>

            <button class="secondary-btn">

                Coming Soon

            </button>

        </div>

        @endforeach

    </div>

</div>

@endforeach

@endsection
