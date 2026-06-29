@extends('layouts.app')

@section('title','Add Crosshair')

@section('content')

<x-page-header
    title="🎯 Add Crosshair"
    description="Assign a crosshair to a professional player."
/>

<form
    action="{{ route('admin.crosshairs.store') }}"
    method="POST"
    class="admin-form">

    @csrf

    <div class="form-grid">

        <div class="form-group">

            <label>Player</label>

            <select name="player_id">

                @foreach($players as $player)

                    <option value="{{ $player->id }}">

                        {{ $player->nickname }}

                    </option>

                @endforeach

            </select>

        </div>

        <div class="form-group">

            <label>Preset Name</label>

            <input
                name="name"
                placeholder="Main Crosshair">

        </div>

        <div class="form-group">

            <label>Crosshair Code</label>

            <textarea
                name="code"
                rows="4"
                placeholder="CSGO-xxxxx-xxxxx-xxxxx"></textarea>

        </div>

        <div class="form-group">

            <label>Color</label>

            <input
                type="color"
                name="color"
                value="#00ff00">

        </div>

        <div class="form-group">

            <label>Size</label>

            <input
                type="number"
                name="size"
                value="2">

        </div>

        <div class="form-group">

            <label>Gap</label>

            <input
                type="number"
                name="gap"
                value="-3">

        </div>

        <div class="form-group">

            <label>Thickness</label>

            <input
                type="number"
                name="thickness"
                value="1">

        </div>

        <div class="form-group">

            <label>

                <input type="checkbox" name="outline">

                Outline

            </label>

            <label>

                <input type="checkbox" name="dot">

                Center Dot

            </label>

        </div>

    </div>

    <div class="form-actions">

        <button class="primary-btn">

            Save Crosshair

        </button>

    </div>

</form>

@endsection
