@extends('layouts.app')

@section('title', 'Edit Map')

@section('content')

<x-page-header
    title="✏ Edit Map"
    description="Update an existing map."
/>

<div class="admin-form-card">

    <form
        action="{{ route('admin.maps.update', $map) }}"
        method="POST">

        @csrf
        @method('PUT')

        <div class="form-grid">

            <div class="form-group">

                <label>Map Name</label>

                <input
                    type="text"
                    name="name"
                    value="{{ old('name', $map->name) }}"
                    required>

            </div>

            <div class="form-group">

                <label>Game</label>

                <select name="game">

                    <option
                        value="CS2"
                        @selected($map->game == 'CS2')>

                        🎯 CS2

                    </option>

                    <option
                        value="Valorant"
                        @selected($map->game == 'Valorant')>

                        🔥 Valorant

                    </option>

                </select>

            </div>

            <div class="form-group">

                <label>Difficulty</label>

                <select name="difficulty">

                    <option
                        value="Easy"
                        @selected($map->difficulty == 'Easy')>

                        Easy

                    </option>

                    <option
                        value="Medium"
                        @selected($map->difficulty == 'Medium')>

                        Medium

                    </option>

                    <option
                        value="Hard"
                        @selected($map->difficulty == 'Hard')>

                        Hard

                    </option>

                </select>

            </div>

            <div class="form-group full">

                <label>Image URL</label>

                <input
                    type="text"
                    name="image"
                    value="{{ old('image', $map->image) }}">

            </div>

            <div class="form-group full">

                <label>Description</label>

                <textarea
                    name="description"
                    rows="8">{{ old('description', $map->description) }}</textarea>

            </div>

        </div>

        <div class="form-actions">

            <button
                type="submit"
                class="primary-btn">

                💾 Update Map

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