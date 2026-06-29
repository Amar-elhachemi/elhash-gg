@extends('layouts.app')

@section('title', $player->nickname.' Crosshair')

@section('content')

<x-page-header
    title="🎯 {{ $player->nickname }} Crosshair"
    description="{{ $player->team }}"
/>

@if($crosshair)

<div class="admin-form">

    <div class="form-grid">

        <div class="form-group">

            <label>Crosshair Name</label>

            <input
                value="{{ $crosshair->name }}"
                readonly>

        </div>

        <div class="form-group">

            <label>Color</label>

            <input
                type="color"
                value="{{ $crosshair->color }}"
                disabled>

        </div>

        <div class="form-group">

            <label>Size</label>

            <input
                value="{{ $crosshair->size }}"
                readonly>

        </div>

        <div class="form-group">

            <label>Gap</label>

            <input
                value="{{ $crosshair->gap }}"
                readonly>

        </div>

        <div class="form-group">

            <label>Thickness</label>

            <input
                value="{{ $crosshair->thickness }}"
                readonly>

        </div>

        <div class="form-group">

            <label>Crosshair Code</label>

            <textarea
                rows="4"
                readonly>{{ $crosshair->code }}</textarea>

        </div>

    </div>

</div>

@else

<div class="admin-form">

    <h2>No crosshair available.</h2>

</div>

@endif

@endsection
