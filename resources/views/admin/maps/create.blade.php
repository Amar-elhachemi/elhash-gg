@extends('layouts.app')

@section('title','Create Map')

@section('content')

<x-page-header
    title="➕ Add Map"
    description="Create a new map."
/>

<div class="admin-form-card">

<form
    action="{{ route('admin.maps.store') }}"
    method="POST">

    @csrf

    <div class="form-grid">

        <div class="form-group">

            <label>Name</label>

            <input
                type="text"
                name="name"
                required>

        </div>

        <div class="form-group">

            <label>Game</label>

            <select name="game">

                <option>CS2</option>

                <option>Valorant</option>

            </select>

        </div>

        <div class="form-group">

            <label>Difficulty</label>

            <select name="difficulty">

                <option>Easy</option>

                <option selected>Medium</option>

                <option>Hard</option>

            </select>

        </div>

        <div class="form-group full">

            <label>Image URL</label>

            <input
                type="text"
                name="image">

        </div>

        <div class="form-group full">

            <label>Description</label>

            <textarea
                name="description"
                rows="6"></textarea>

        </div>

    </div>

    <div class="form-actions">

        <button
            class="primary-btn">

            💾 Save Map

        </button>

        <a
            href="{{ route('admin.maps') }}"
            class="secondary-btn">

            Cancel

        </a>

    </div>

</form>

</div>

@endsection