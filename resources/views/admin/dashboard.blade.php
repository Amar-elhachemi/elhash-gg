@extends('layouts.app')

@section('title','Admin Dashboard')

@section('content')

<x-page-header
    title="⚙ Admin Dashboard"
    description="Manage ELHASH.GG content."
/>

<div class="stats-grid">

    <div class="stat-card">

        <span>👑</span>

        <h2>{{ \App\Models\Player::count() }}</h2>

        <p>Players</p>

    </div>

    <div class="stat-card">

        <span>🎯</span>

        <h2>0</h2>

        <p>Crosshairs</p>

    </div>

    <div class="stat-card">

        <span>🗺</span>

        <h2>7</h2>

        <p>Maps</p>

    </div>

    <div class="stat-card">

        <span>📰</span>

        <h2>0</h2>

        <p>Articles</p>

    </div>

</div>

<div class="admin-grid">

    <a href="{{ route('admin.players') }}" class="admin-box">

        👑

        <h3>Players</h3>

        <p>Manage professional players.</p>

    </a>

    <a href="{{ route('admin.crosshairs') }}" class="admin-box">

        🎯

        <h3>Crosshairs</h3>

        <p>Manage crosshair presets.</p>

    </a>

    <a href="#" class="admin-box">

        🗺

        <h3>Maps</h3>

        <p>Manage map guides.</p>

    </a>

    <a href="#" class="admin-box">

        🧑

        <h3>Agents</h3>

        <p>Manage Valorant agents.</p>

    </a>

    <a href="#" class="admin-box">

        📰

        <h3>News</h3>

        <p>Publish articles.</p>

    </a>

    <a href="#" class="admin-box">

        ⚙

        <h3>Settings</h3>

        <p>Website configuration.</p>

    </a>

</div>

@endsection
