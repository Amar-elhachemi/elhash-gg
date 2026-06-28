@extends('layouts.app')

@section('title', 'Gaming Utilities')

@section('content')

<x-page-header
    title="🛠 Gaming Utilities"
    description="Powerful tools designed to improve your gaming experience."
/>

<div class="container">

    <div class="dashboard-grid">

        <x-tool-card
            title="Sensitivity Converter"
            description="Convert sensitivity between CS2 and Valorant."
            icon="🎯"
            route="utilities.sensitivity"/>

        <x-tool-card
            title="FPS Calculator"
            description="Estimate FPS based on your hardware."
            icon="📈"
            route="utilities.fps"/>

        <x-tool-card
            title="Monitor Distance"
            description="Convert monitor distance percentages."
            icon="🖥️"
            route="utilities.monitor"/>

        <x-tool-card
            title="Config Converter"
            description="Convert configuration files between games."
            icon="⚙️"
            route="utilities.config"/>

    </div>

</div>

@endsection
