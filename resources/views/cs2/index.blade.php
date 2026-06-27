@extends('layouts.app')

@section('title','Counter-Strike 2')

@section('content')

<section class="dashboard-page">

    <div class="container">

        <div class="dashboard-header">

            <h1>
                Counter-Strike 2
            </h1>

            <p>
                Everything you need to improve your gameplay.
                Crosshairs, configs, maps and professional settings,
                all in one place.
            </p>

        </div>

        <div class="dashboard-grid">

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

        </div>

    </div>

</section>

@endsection