@extends('layouts.app')

@section('title', 'CS2')

@section('content')

<x-page-header
    title="🎯 Counter-Strike 2"
    description="Everything you need to improve your game." />

<section class="dashboard">

    <x-tool-card
        title="Crosshair Generator"
        description="Create professional CS2 crosshairs."
        icon="🎯"
        route="cs2.crosshair"/>

    <x-tool-card
        title="Config Generator"
        description="Generate practice configs."
        icon="⚙"
        route="cs2.config"/>

    <x-tool-card
        title="Pro Settings"
        description="Browse professional player settings."
        icon="👑"
        route="cs2.prosettings"/>

    <x-tool-card
        title="Maps"
        description="Interactive maps and callouts."
        icon="🗺"
        route="cs2.maps"/>

</section>

@endsection